<div id="append_parent"></div>

<div class="name">
	<?php if ($this->_var['user_info']): ?>
		<div class="lcon_06"></div>
		<div class="sidebar_color"  style="margin-top: 2px;">
			ASSISTANTS
		</div>
		<div class="facebook_c">
			<div class="sidebar_p">
				<div class="portraitimg">
				  <img src="themes/BoBo/images/portrait.png" alt="" class="portrait img-responsive"/>
				</div>
				<div class="sidebar_color mlcolor">Jieting Wu</div>
			</div>
		</div>
	<?php else: ?>
		<div class="facebook_c">
			<div class="before">
				<img src="themes/BoBo/images/before-login_03.png" class="img-responsive" />
				<h3>Log in with Facebook</h3>
				<p>Shop together & share your style</p>
			</div>
			<div class="append_parent">
				<button type="button" data-toggle="modal" data-target="#myModal" class="append_parent_log">
				  Sing Up
				</button>
				<button type="button" data-toggle="modal" data-target="#myModal" class="append_parent_registration">
				  Log In
				</button>
			</div>
		</div>
	<?php endif; ?>
</div>
<?php if ($this->_var['user_info']): ?>
	<div class="input-group find">
		<input class="form-control" type="email" placeholder="Find my mate" seatext>
		<div class="input-group-addon">
		  <img src="themes/BoBo/images/lcon_02.png" alt="" />
		</div>
	</div>
<?php endif; ?>