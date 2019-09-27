<template>
  <div>
    <div class="u-content u-update-phone">
      <div class="u-task">
        <div class="top-section">
          <div class="progress-details">
            <div class="progress-bg">
              <div class="progress-section"></div>
            </div>
            <div class="arrow"></div>
          </div>
        </div>
        <div class="sections">
          <div class="section-1 section-area">
            <div class="content-details">
              <form id="verifyPhoneForm" style novalidate="novalidate">
                <div class="col-2">
                  <div class="col label-item">
                    <label>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Original mobile number:</font>
                      </font>
                    </label>
                  </div>
                  <div class="col form-item">
                    <div class="form-box">
                      <div class="forms-input">
                        <span class="phone-prefixes">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">186</font>
                          </font>
                        </span>
                        <span>
                          <input type="text" class="form-input num first-num" maxlength="1">
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span>
                          <input
                            type="text"
                            class="form-input num"
                            disabled="disabled"
                            maxlength="1"
                          >
                        </span>
                        <span class="phone-suffix">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">2</font>
                          </font>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item">
                    <label></label>
                  </div>
                  <div class="col form-item">
                    <div class="reminder">
                      <span class="success js-phone-msg"></span>
                    </div>
                  </div>
                </div>
                <input id="originalPhone" name="originalPhone" type="hidden" value>
                <div class="col-2">
                  <div class="col label-item">
                    <label>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Mobile phone verification code:</font>
                      </font>
                    </label>
                  </div>
                  <div class="col form-item">
                    <div class="form-box security large-input">
                      <i></i>
                      <div class="forms-input">
                        <input
                          type="text"
                          maxlength="7"
                          id="code"
                          name="code"
                          placeholder="请输入6位数验证码"
                        >
                      </div>
                      <div class="controls">
                        <a class="send-verification btn-resend">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Send the verification code</font>
                          </font>
                        </a>
                        <a class="sent hidden">发送成功</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item">
                    <label></label>
                  </div>
                  <div class="col form-item">
                    <div class="reminder"></div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item"></div>
                  <div class="col form-item">
                    <div class="form-box submit">
                      <a class="invalid js-verify-submit">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">Next step</font>
                        </font>
                      </a>
                    </div>
                    <p class="text-center">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Have you encountered a problem?</font>
                        <font style="vertical-align: inherit;">Contact</font>
                      </font>
                      <a href="javascript:;" class="as-cs">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">online customer service</font>
                        </font>
                      </a>
                    </p>
                  </div>
                </div>
              </form>
              <span class="haveProgress" style="display: none;">
                <p class="text-center">
                  我的手机号码：
                  <span class="js-show-phone"></span>
                </p>
                <p class="js-tips text-center text-orange">
                  您存在未审批的电话修改申请！请联系您的
                  <a class="as-cs pointer-link" style="color: #337ab7;">在线客服</a>
                </p>
              </span>
            </div>
          </div>
          <div class="section-2 section-area" style="display: none">
            <div class="content-details">
              <form id="updatePhoneForm" novalidate="novalidate">
                <div class="col-2">
                  <div class="col label-item">
                    <label>新手机号码：</label>
                  </div>
                  <div class="col form-item">
                    <div class="form-box large-input">
                      <i></i>
                      <div class="forms-input">
                        <input
                          id="newPhone"
                          name="phone"
                          type="text"
                          maxlength="11"
                          placeholder="请输入新手机号码"
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item">
                    <label></label>
                  </div>
                  <div class="col form-item">
                    <div class="reminder"></div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item">
                    <label>手机验证码：</label>
                  </div>
                  <div class="col form-item">
                    <div class="form-box security large-input">
                      <i></i>
                      <div class="forms-input">
                        <input type="text" name="code" maxlength="7" placeholder="请输入6位数验证码">
                      </div>
                      <div class="controls">
                        <a class="send-verification btn-resend">发送验证码</a>
                        <a class="sent hidden">发送成功</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item">
                    <label></label>
                  </div>
                  <div class="col form-item">
                    <div class="reminder"></div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col label-item"></div>
                  <div class="col form-item">
                    <div class="form-box submit">
                      <a class="invalid js-verify-submit">修改</a>
                    </div>
                    <p class="text-center">
                      遇到问题了吗？联系
                      <a href="javascript:;" class="as-cs">在线客服</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="section-3 section-area" style="display: none">
            <div class="content-details">
              <div class="col-2">
                <div class="col form-item">
                  <div class="form-box large-input image-cont">
                    <img src="/assets/images/user/u_task/complete.png">
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="label-item">
                  <label>新手机号码：</label>
                </div>
                <div class="form-item">
                  <div class="form-box large-input">
                    <div class="forms-input">
                      <p>1** **** ****</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="col form-item">
                  <div class="form-box submit">
                    <a href="/ucenter/account">确定</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

