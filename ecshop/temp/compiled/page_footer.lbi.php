<div class="content_right">
          <div class="model">
<<<<<<< HEAD
            <div class="modelimg z-index1">
              <img src="themes/BoBo/images/model/m-160-l.png" class="img-responsive" />
            </div>
            <div class="trousers z-index50">
              <img src="themes/BoBo/images/model/m-160-l-legging.png" class="img-responsive" />
            </div>
            <div class="coat z-index100">
              <img src="themes/BoBo/images/model/m-160-l-coat.png" class="img-responsive" />
            </div>
            <div class="underwear z-index10">
              <img src="themes/BoBo/images/model/m-160-l-wear.png" class="img-responsive" />
            </div>
=======
            <img src="themes/BoBo/images/model.png" class="img-responsive" />
>>>>>>> daccdeeb7ed8e4fd96df14966cfbb5bd82405ab1
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar">
    <div class="sidebar_b">
      <div class="lcon_03">
        <img src="themes/BoBo/images/lcon_03.png" class="img-responsive"/>
      </div>
      <div class="color">
        BASKET &
        <br>CHECKOUT</div>
    </div>
    <div class="sidebar_c">
      <div class="titlea">
        <div class="lcon_04">
          <img src="themes/BoBo/images/lcon_04.png" class="img-responsive" />
        </div>
        <div class="sidebar_title">
          SOCIAL NETWORK &
          <br>SHARE TOUR LOOK</div>
      </div>
      <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
  </div>
</div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal_color">
          <form role="form">
            <div class="modal_login left">
              <h3>Login to BoBo</h3>
              <div class="modal_input">
                <input type="text"  name="username" id="username"  class="form-control mb13" placeholder="honor-pandora@hotmail.com"/>
                <input type="password"  name="password" id="password" class="form-control"  placeholder="******"/>
                <div class="modal_blank">
                  <a href=""><p>Forgotten your password?</p></a>
                </div>
                <img src="themes/BoBo/images/login_07.png" alt="" class="img-responsive"/>
                <button type="button" name="button" id="submit_login" class="append_parent_log">Single Login</button>
                <button type="submit" class="append_parent_registration" id="login_remember" >Keep Me Login</button>
              </div>
            </div>
          </form>
          <div class="modal_line"></div>
          <form role="form" id="formLogin" name="formLogin" action="" method="post" onSubmit="return userLogin()" >
        <div class="modal_login left">
          <h3>Signup to BoBo</h3>
          <div class="modal_input">
            <input type="email"  name="email" id="email" class="form-control mb13" value="" placeholder="Email Address"/>
            <input type="password" class="form-control mb13" value="" id="password1" placeholder="Password"/>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" placeholder="Confirm Password"/>
            <div class="modal_blank"></div>
            <button type="button" data-dismiss="modal" class="append_parent_log">Reset</button>
            <button type="button" name="button" id="register"class="append_parent_registration">Remember Me</button>
            <input type="hidden" value="1" name="remember" id="remember" />
          </div>
        </div>
          </form>
          <button type="button" class="close timesx" data-dismiss="modal" ><img src="themes/BoBo/images/login_03.png" alt="" class="img-responsive"/></button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#submit_login').click(function(){
      var $username = $('#username').val();
      var $password = $('#password').val();
      /*ajax*/
      $.ajax({
            type:'POST',
            url:"user.php",
            data:{username:$username,password:$password,act:'act_login'},
            success:function(data){         
            if(data=="info"){
              $('#myModal').modal('hide');
              alert('Login successfully');
              location=location;
            }else{
              alert(data);
            }
          }
        });
      /*End ajax*/
    });
    $('#login_remember').click(function(){
      var $username = $('#username').val();
      var $password = $('#password').val();
      /*ajax*/
      $.ajax({
            type:'POST',
            url:"user.php",
            data:{username:$username,password:$password,act:'act_login',remember:1},
            success:function(data){         
            if(data=="info"){
              $('#myModal').modal('hide');
              alert('Login successfully');
              location=location;
            }else{
              alert(data);
            }
          }
        });
      /*End ajax*/
    });
    $('#register').click(function(){
      var $email = $('#email').val();
      var $password1 = $('#password1').val();
      var $confirm_password = $('#confirm_password').val();
      /*ajax*/
      $.ajax({
            type:'POST',
            url:"user.php",
            data:{email:$email,password:$password1,confirm_password:$confirm_password,act:'act_register'},
            success:function(data){
            if(data=="info"){
              $('#myModal').modal('hide');
              alert('Register Successfully.');
              location=location;
            }else{
              alert(data);
            }
          }
        });
      /*End ajax*/
    });
  </script>

<<<<<<< HEAD

<script>
  $(function(){
    $('.change img').click(function(){
      var thisclass = $(this).attr('part');
      var thissrc = $(this).attr('src');
      var imgObj = $('.'+thisclass+' img');
      var srcObj = $('.'+thisclass);
      if(imgObj.length>0){
        var nowsrc = imgObj.attr('src');
        if(thissrc==nowsrc){
          imgObj.remove();
        }else{
          imgObj.attr('src',thissrc);
        }
      }else{
        srcObj.append('<img src="'+thissrc+'" />');
      }
    })
  })

</script>

=======
>>>>>>> daccdeeb7ed8e4fd96df14966cfbb5bd82405ab1
</body>
</html>

