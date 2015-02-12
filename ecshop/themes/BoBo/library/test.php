              <div id="cart_{$user_cart.rec_id}"><div class="cart_image">
                  <img src="{$user_cart.goods_thumb}" class="img-responsive"/>
                </div>
                <div class="cart_content">
                  <div class="cart_top">
                    <p>{$user_cart.goods_name}</p>
                     <div class="cart_right">
                      <button type="button" class="close cart_delete" value="{$user_cart.rec_id}">
                        <img src="./images/lcon_17.png" class="img-responsive"/>
                      </button>
                    </div>
                  </div>
                  <div class="cart_color">
                    <div class="E55"></div><p>XS</p>
                  </div>
                  <div class="cart_progress">
                    <!-- {if $user_cart.ext_info} -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {$user_cart.customers_progress}%;">
                        </div>
                      </div>
                      <div class="cart_detail">
                        <div>
                          <p class='cart_title'>{$user_cart.start_time}/{$user_cart.end_time}</p>
                          <p class='cart_footer_detail'>days to go</p>
                        </div>
                        <div>
                          <p class='cart_title'>{$user_cart.customers_progress}%</p>
                          <p class='cart_footer_detail'>ready</p>
                        </div>
                        <div>
                          <p class='cart_title'>{$user_cart.market_price}</p>
                          <p class='cart_footer_detail'>Future Price</p>
                        </div>
                      </div>
                    <!-- {/if} -->
                  </div>
                  <div class="cart_footer_price">
                    <p><?php $_GET['price'];?></p>
                  </div>
                </div>
              </div>


              $a

              $('.cart_main').append($a);