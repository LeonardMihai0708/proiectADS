
<div class="main margin-top bg-color">
    <h1 style="background: linear-gradient(to right, rgba(255, 69, 0, 0.05) 0%, rgba(255, 69, 0, 0.05) 40%, rgba(255, 215, 0, 0.05) 60%, rgba(255, 215, 0, 0.05) 100%, #FFFFFF); padding: 20px; text-align: center;">Contacteaza-ne!</h1>
    <div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">
                Solicita Oferta
            </span>
            <label class="label-input100" for="first-name">Nume si Prenume *</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Nume">
                <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Prenume">
                <input class="input100" type="text" name="last-name" placeholder="Last name">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="email">Email *</label>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="phone">Numar de telefon:</label>
            <div class="wrap-input100">
                <input id="phone" class="input100" type="text" name="phone" placeholder="Ex. +40749571318">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="website">Website *</label>
            <div class="wrap-input100" data-validate="Website">
                <input class="input100" type="text" name="website" placeholder="Link Site-ul tau">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="b/b">Ce brand/business reprezinti? *</label>
            <div class="wrap-input100" data-validate="Website">
                <input class="input100" type="text" name="b/b" placeholder="Link Site-ul tau">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="serviciu">Ce buget ai la dispozitie?</label>
            <div class="wrap-input100">
                <select id="inputState" class="form-control" name="serviciu" >
                    <option selected>Te rog sa alegi un buget..</option>
                    <option> Sub 1000 &#8364 </option>
                    <option> 1500 - 2000 &#8364</option>
                    <option> 3000 - 5000 &#8364</option>
                    <option> Peste 5000 &#8364</option>
                </select>
            </div>

            <label class="label-input100" for="message">Mesaj *</label>
            <div class="wrap-input100 validate-input" data-validate="Te rog sa scrii aici mesajul tau">
                <textarea id="message" class="input100" name="message" placeholder="Te rog sa scrii aici mesajul tau"></textarea>
                <span class="focus-input100"></span>
            </div>
    
            <div class="form-group" style="margin-top: 20px;">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
                </div>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Send Message
                </button>
            </div>
        </form>
        <div class="contact100-more flex-col-c-m" style="background-image: url('img/');">
            <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25" style="margin-bottom: 30px; font-size: 28px;">
                    <span class="lnr lnr-map-marker">Testeaza-ti curiozitatile intr-o discutie despre proiectul tau.</span>
                </div>
                <div class="flex-col size2" style="margin-bottom: 20px;">
                    <span class="txt1 p-b-20">
                        Email
                    </span>
                    <span class="txt3">
                        <a href="/cdn-cgi/l/email-protection" class="email">test@test</a>
                    </span>
                </div>
                <div class="flex-col size2" style="margin-bottom: 20px;">
                    <span class="txt1 p-b-20">
                        Telefon
                    </span>
                    <span class="txt3">
                        <a href="/cdn-cgi/l/email-protection" class="phone_number">(+40) 700000000</a>
                    </span>
                </div>
                <div class="flex-col size2" >
                    <span class="txt1 p-b-20">
                        Date Fiscale
                    </span>
                    <span class="txt3">Denumire Firma</span>
                    <span class="txt3">Denumire Firma</span>
                    <span class="txt3">Denumire Firma</span>
            </div>
            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="dropDownSelect1"></div>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"854714d6d8ef0543","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>


<!-- https://getbootstrap.com/docs/4.3/components/forms/ -- Server side -->

<!-- https://colorlib.com/wp/template/contact-form-v17/ -->
