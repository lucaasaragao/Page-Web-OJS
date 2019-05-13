<?php
    include 'header.html';
?>

                <!-- Main -->
                <section id="one" class="wrapper style1 special">
        </section>
			<section id="main" class="wrapper">
                    <div class="container">
                            <form class="cmp_form cmp_form login" id="login" method="post" action="http://150.165.254.102/index.php/index/login/signIn">
                                <input type="hidden" name="csrfToken" value="8aa2537e5ac5f82fc930308da43d2118">
                        
                                
                                <input type="hidden" name="source" value="">
                        
                                <fieldset class="fields">
                                    <div class="username">
                                        <label>
                                            <span class="label">
                                                Usuário <br>
                                                <span class="required">*</span>
                                                <span class="pkp_screen_reader">
                                                    Obrigatório
                                                </span>
                                            </span>
                                            <input type="text" name="username" id="username" value="" maxlength="32" required="">
                                        </label>
                                    </div>
                                    <div class="password">
                                        <label>
                                            <span class="label">
                                                Senha <br>
                                                <span class="required">*</span>
                                                <span class="pkp_screen_reader">
                                                    Obrigatório
                                                </span>
                                            </span>
                                            <input type="password" name="password" id="password" value="" password="true" maxlength="32" required="">
                                            <a href="http://150.165.254.102/index.php/index/login/lostPassword">
                                                Esqueceu a senha?
                                            </a>
                                        </label>
                                    </div>
                                    <div class="remember checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
                                            <span class="label">
                                                Mantenha-me conectado
                                            </span>
                                        </label>
                                    </div>
                                    <div class="buttons">
                                        <button class="submit" type="submit">
                                            Acesso
                                        </button>
                        
                                                            
                                            <a href="http://150.165.254.102/index.php/index/user/register?source=" class="register">
                                                Não é um usuário? Registe-se no site
                                            </a>
                                                    </div>
                                </fieldset>
                            </form>
                    </div>
                </section>



<!-- Footer -->
    <?php
        include 'footer.html';
    ?>