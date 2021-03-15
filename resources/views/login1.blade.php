<html>
   
   <head>
      <title>Login Form</title>
   </head>

   <body>
      
      @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
      <?php
        //echo Form::open(array('url'=>'/validation'));
      ?>
      <form action="/validation" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <table border = '1'>
         <tr>
            <td align = 'center' colspan = '2'>Login</td>
         </tr>
         <tr>
            <td>Username</td>
            <td><input type='text' name='username' /></td>
         </tr>
         <tr>
            <td>Password</td>
            <td><input type='password' name='password' /></td>
         </tr>
         <tr>
            <td align = 'center' colspan = '2'><input type='submit' name='login' /></td>
         </tr>
      </table>
      </form>
      <?php
         //echo Form::close();
      ?>
   
   </body>
</html>