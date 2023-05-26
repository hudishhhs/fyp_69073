@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-auto">

        <div class="card">
                <div class="card-header">{{ __('lessons') }}</div>

                <div class="card-body">
            <div class="list-group">
                @foreach ($lessons as $lesson)
                    <a href="{{ route('lessons.show', $lesson->id) }}" class="list-group-item list-group-item-action{{ $lesson->id == $currentLesson->id ? ' active' : '' }}">
                        {{ $lesson->name }}
                    </a>
                @endforeach
            </div>
            </div>
        </div>

        </div>
        <div class="col-md-9">
        <div class="card">
                <div class="card-header">What is Injection Attack?</div>

                <div class="card-body">
                <h1>OWASP A03 Injection Attack</h1>
  <p>OWASP A03 Injection Attack refers to a category of security vulnerabilities that occur when untrusted user input is injected into a system or application without proper validation or sanitization. These attacks exploit the system's failure to properly handle user-supplied data, leading to unauthorized access, data breaches, and other malicious activities. The A03 category specifically covers injection attacks, which are commonly encountered in web applications and can have severe consequences if not addressed.</p>
  
  <h2>SQL Injection</h2>
  <p>SQL injection occurs when an attacker injects malicious SQL statements into a vulnerable application's database query. This attack takes advantage of improper handling of user-supplied input within SQL statements. By manipulating the input, an attacker can modify or extract sensitive data, bypass authentication mechanisms, or even execute arbitrary commands on the database server.</p>
  
  <p>For example, consider a login form that accepts a username and password. If the application fails to properly sanitize the input and directly incorporates it into a SQL query, an attacker can input a crafted value that alters the query's logic. This could lead to the attacker gaining access to unauthorized information or even manipulating the database.</p>
  
  <h2>Cross-Site Scripting (XSS) Injection</h2>
  <p>Cross-site scripting (XSS) injection occurs when an attacker injects malicious scripts into a trusted website, which is then executed by a victim's browser. This attack targets the client-side of web applications, exploiting vulnerabilities in how user input is handled and displayed without proper sanitization or encoding.</p>
  
  <p>There are three main types of XSS attacks:</p>
  <ul>
    <li>Stored XSS: Malicious scripts are permanently stored on the target server and are served to users whenever they access a specific page or resource. This can result in the script executing in the users' browsers, compromising their session, stealing sensitive information, or performing other malicious activities.</li>
    <li>Reflected XSS: Malicious scripts are embedded in URLs or crafted links that are then sent to victims. When users click on the manipulated link, the script is executed in their browsers, often leading to the theft of sensitive information or unauthorized actions.</li>
    <li>DOM-based XSS: This type of XSS occurs when the vulnerability lies in the client-side JavaScript code that dynamically modifies the Document Object Model (DOM) of a web page. The attacker manipulates the client-side script to inject and execute malicious code.</li>
  </ul>
  
  <p>These are just two examples of injection attacks, but the A03 category includes other variations, such as command injection, LDAP injection, XML injection, and more. Each of these attacks targets specific vulnerabilities in different types of systems and applications.</p>
  
        </div>
</div>
</div>
    </div>
@endsection
