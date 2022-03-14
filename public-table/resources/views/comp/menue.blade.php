<!-- Top navigation -->
<nav class="topnav">
    <a class="{{ (\Request::route()->getName() == 'public') ? 'active' : '' }}"
       href="public"><span>Public Table</span></a>
    <a class="{{ (\Request::route()->getName() == 'chain') ? 'active' : '' }}"
       href="chain">Chain Table</a>

    <a class="{{ (\Request::route()->getName() == 'calendar') ? 'active' : '' }}"
       href="calendar">Calendar Table</a>

    <a class="{{ (\Request::route()->getName() == 'different') ? 'active' : '' }}"
       href="different">Different Table</a>

    <a class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"
       href="contact">Contact</a>
    <a class="{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}"
       href="about">About</a>
    <a id="switch">Theme</a>
</nav>


<!--    Button hat nicht funktioniert
    <div class="container">
        <button id="switch">Darkmode</button>
    </div>
Immer ENDE ziehen
-->
