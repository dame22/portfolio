<?
    include_once $_SERVER['DOCUMENT_ROOT']."/portfolio/head.php";
?>
        <section>
            <div class="text">
                <p class="typing"></p>
                <p class="typing-txt">CONTACT</p> 
            </div>

            <article>
                <div class="rotate">

                    <div class="card">
                        <div class="info front">
                            <img src="asset/img/name_icon.png" alt="">        
                            <p>NAME</p>
                        </div>

                        <div class="info back">
                            <span>한
                                소담</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="info front">
                            <img src="asset/img/tel_icon.png" alt="">        
                            <p>TEL</p>            
                        </div>

                        <div class="info back">
                            <span>010-
                                7165
                                9718</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="info front">
                            <img src="asset/img/mail_icon.png" alt="">        
                            <p>E-MAIL</p>
                        </div>

                        <div class="info back">
                            <span>hansodam77
                                @gmail.com</span>
                        </div>
                    </div>

                </div>
            </article>

            <article>
                <form  name="contact" action="contact_ok.php" method="post">
                    <div class="box">
                        <div class="contact">
                            <input type="text" placeholder="NAME">
                            <input type="tel" placeholder="E-MAIL">
                            <input type="email" placeholder="TEL">
                        </div>
                        <div class="message">
                            <p>MESSAGE</p>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="send">
                        <input type="submit" value="SEND">
                    </div>
                </form>
            </article>

        </section>
    </div>
</body>
</html>