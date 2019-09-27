<template>
  <div>
    <div class="u-content u-subscribe">
      <div class="mobile-wrap">
        <div>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Mobile number:</font>
          </font>
          <span class="js-show-phone">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">186*******2</font>
            </font>
          </span>
          <a href="/ucenter/security/phone" class="btn-link">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">modification</font>
            </font>
          </a>
        </div>
        <form id="verifyPhoneForm" class="js-verify-notation" novalidate="novalidate">
          <div class="form-inline">
            <a class="btn-resend pointer-link" verify-type="bound">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">obtain SMS verification code</font>
              </font>
            </a>
            <input
              id="captcha"
              name="captcha"
              type="text"
              class="form-control"
              maxlength="6"
              placeholder="请输入短信验证码"
            >
            <a class="btn-submit pointer-link" verify-type="bound">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">confirm at once</font>
              </font>
            </a>
            <span class="error-msg"></span>
          </div>
          <p>
            <font style="vertical-align: inherit;">
              <font
                style="vertical-align: inherit;"
              >Tips: Please enter the SMS verification code to open the SMS subscription function.</font>
            </font>
          </p>
        </form>
      </div>
      <table class="js-table-subscribe table table-bordered loading-portion">
        <thead>
          <tr>
            <th>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Subscription content</font>
              </font>
            </th>
            <th>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">SMS subscription</font>
              </font>
            </th>
            <th>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Subscription content</font>
              </font>
            </th>
            <th>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">SMS subscription</font>
              </font>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Login prompt</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="login" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Offer added</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="promotions" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
          </tr>
          <tr class="highlight">
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Contact phone modification</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="modifyPhone" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Bank data modification</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="modifyBankingData" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
          </tr>
          <tr>
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Recharge prompt</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="deposit" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Name modification</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="modifyAccountName" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
          </tr>
          <tr class="highlight">
            <td>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Cash withdrawal prompt</font>
              </font>
            </td>
            <td>
              <label class="switcher">
                <input name="withdrawal" class="type-sms" type="checkbox">
                <span>
                  <i></i>
                </span>
              </label>
            </td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <div class="transparent-base64 loading-js loading-portion-content"></div>
      </table>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>

