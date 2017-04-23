<div class='login-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create('login')?>">
        <h2>Login</h2>
        <p><label>Username:<br/><input type='text' name='name' value='' placeholder="Username"/></label></p>
        <p><label>Password:<br/><input type='password' name='web' value='' placeholder="Password"/></label></p>
        <p class=buttons>
            <input type='submit' name='doCreate' value='Login' onClick="this.form.action = '<?=$this->url->create('user/verify')?>'"/>
        </p>
    </form>
</div>
