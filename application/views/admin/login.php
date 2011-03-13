<form action="<?php echo URL::site('/admin/login'); ?>" method="post" accept-charset="utf-8">
  <h2>Login</h2>

  <div>
    Username: <input type='text' id='username' name='username' value="<?php echo Arr::get($values, 'username'); ?>" />
  </div>

  <div>
    Password: <input type='password' id='password' name='password' value='<?php echo Arr::path($values, 'password'); ?>' />
  </div>
  <div>
    <input type='submit' value='Login' />
  </div>
</form>