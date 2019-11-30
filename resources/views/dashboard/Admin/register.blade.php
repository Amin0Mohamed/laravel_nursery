<form action="{{route('dashboard.registeradmin')}}" method="post">
    {{csrf_field()}}
    <input type="text" placeholder="name" name="name">
    <input type="email" placeholder="email" name="email">
    <input type="file" placeholder="image" name="image">
    <input type="password" placeholder="password" name="password">
    <input type="password" placeholder="c_password" name="c_password">
    <select name="Authorize">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" value="register">
</form><?php
