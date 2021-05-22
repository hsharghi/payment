<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet" />
    <title>{!! isset($inputs['title']) ? $inputs['title'] : 'درگاه پرداخت تست' !!}) ?></title>
    <style>
      html {
        font-family: "Vazir", sans-serif;
      }
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      form {
        text-align: center;
        margin-top: 2px;
      }

      h2,
      p {
        text-align: center;
        margin: 0;
      }
      h2 {
        font-weight: 900;
      }
      p {
        color: darkgray;
      }
      .tbl {
        display: flex;
        flex-direction: column;
        min-width: 400px;
        max-width: 500px;
        margin-top: 50px;
        background-color: #efefef;
        padding: 20px;
        border-radius: 20px;
      }
      .row {
        display: flex;
        min-height: 50px;
      }
      .cell:nth-child(2) {
        color: slategray;
      }
      .cell {
        flex: 1;
      }
      .row .cell {
        padding: 5px;
        box-sizing: border-box;
      }
      .button {
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
      }

      .success {
        background-color: green;
      }

      .cancel {
        background-color: red;
      }
    </style>
  </head>

  <body>
    <form action="{!! isset($inputs['successUrl']) ? $inputs['successUrl'] : '#' !!}" method="post" id="success_form"></form>
    <form action="{!! isset($inputs['cancelUrl']) ? $inputs['cancelUrl'] : '#' !!}" method="post" id="cancel_form"></form>
    <div class="container">
      <h2>{!! isset($inputs['title']) ? $inputs['title'] : 'Title' !!}) ?></h2>
      <p>{!! isset($inputs['description']) ? $inputs['description'] : 'توضیحات' !!}) ?></p>
      <div class="tbl">
        <div class="row">
          <div class="cell">{!! isset($inputs['orderLabel']) ? $inputs['orderLabel'] : 'شماره سفارش' !!}) ?></div>
          <div class="cell">{!! isset($inputs['orderId']) ? $inputs['orderId'] : !!} : '') ?></div>
        </div>
        <div class="row">
          <div class="cell">{!! isset($inputs['amountLabel']) ? $inputs['amountLabel'] : 'مبلغ قابل پرداخت' !!} : ) ?></div>
          <div class="cell">{!! isset($inputs['price']) ? $inputs['price'] : 0 !!}) ?></div>
        </div>
        <div class="row">
          <div class="cell">
            <div id="success" class="button success">{!! isset($inputs['payButton']) ? $inputs['payButton'] : 'Success' !!}) ?></div>
          </div>
          <div class="cell">
            <div id="cancel" class="button cancel">{!! isset($inputs['cancelButton']) ? $inputs['cancelButton'] : 'Cancel' !!}) ?></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  var success_button = document.getElementById("success");
  var cancel_button = document.getElementById("cancel");

  success_button.onclick = function () {
    var f = document.getElementById("success_form");
    f.submit();
  };

  cancel_button.onclick = function () {
    var f = document.getElementById("cancel_form");
    f.submit();
  };
</script>
