<script src="/js/create.js"></script>

<form class="form-signin" method="get">
    <img class="mb-4" src="/img/logos/PAS.png" alt="" height="150">
    <h1 class="h3 mb-3 font-weight-normal">Amount <text style="color: deeppink"> <?= $amount ?></text> RUB</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="hidden" id="amount" name="amount" value="<?= $amount ?>">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="" onclick="CreatePay(this.parentNode)">Create Pay</button>
</form>