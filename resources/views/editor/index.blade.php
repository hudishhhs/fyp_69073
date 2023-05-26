<!DOCTYPE html>
<html>
<head>
    <title>Tryit Editor</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            overflow: hidden;
        }

        .input-container,
        .output-container {
            flex: 1;
            height: 100%;
            overflow: auto;
            border: 1px solid #ccc;
            box-sizing: border-box;
            padding: 10px;
        }

        textarea {
            width: 100%;
            height: 100%;
            border: none;
            box-sizing: border-box;
            padding: 10px;
            font-size: 14px;
            resize: none;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            box-sizing: border-box;
            padding: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <h2>Tryit Editor</h2>

    <p>Click on the "Run" button to see the result.</p>

    <div class="container">
        <div class="input-container">
            <textarea id="htmlCode">
                <!DOCTYPE html>
                <html>
                <head>
                    <title>My Website</title>
                </head>
                <body>

                    <h1>Welcome to my website!</h1>

                    <p>This is a paragraph.</p>

                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>

                </body>
                </html>
            </textarea>
        </div>

        <div class="output-container">
            <iframe id="outputFrame"></iframe>
        </div>
    </div>

    <br>

    <button id="runButton">Run</button>

    <script>
    $(document).ready(function() {
        $('#runButton').click(function() {
            var htmlCode = $('#htmlCode').val();

            var outputFrame = document.getElementById('outputFrame').contentWindow.document;
            outputFrame.open();
            outputFrame.write('');
            outputFrame.close();

            var iframeContent = outputFrame.createElement('div');
            iframeContent.innerHTML = htmlCode;
            outputFrame.body.appendChild(iframeContent);

            var scriptTags = outputFrame.getElementsByTagName('script');
            for (var i = 0; i < scriptTags.length; i++) {
                var newScript = outputFrame.createElement('script');
                newScript.type = 'text/javascript';
                if (scriptTags[i].src) {
                    newScript.src = scriptTags[i].src;
                } else {
                    newScript.text = scriptTags[i].text;
                }
                outputFrame.body.appendChild(newScript);
            }
        });
    });

     $(document).on('submit', 'form', function(e) {
                e.preventDefault(); // Prevent the default form submission behavior
            });
</script>

    </script>

</body>
</html>
