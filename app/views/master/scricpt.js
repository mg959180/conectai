
        // Trigger the function on page load
        document.addEventListener('DOMContentLoaded', function () {
            var WebsiteModal1 = document.getElementById('WebsiteModal1');
            var popupshow = false;
            window.addEventListener('scroll', function () {
                if (!popupshow) {
                    if (window.scrollY >= 1500) {

                        if (popupopencounter == 0) {
                            if (isAlreadyLoggedIn == 0) {
                                $("#WebsiteModal1").modal("show");
                                popupopencounter = 1;
                                popupshow = true;
                            }
                        }
                    }
                }
            });

        });

        // Function to read the value of a specific cookie
        function getCookieValue(name) {
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i].trim();
                if (cookie.startsWith(name + '=')) {
                    return cookie.substring(name.length + 1);
                }
            }
            return null;
        }

        // Function to alert the email ID field from the cookie
        function alertEmailIDFromCookie() {
            const emailID = getCookie('EmailId'); // Replace 'email' with the name of your cookie
            if (emailID) {
                var loginElement = document.getElementById('hlDemo');
                $("#hlDemo").attr("onclick", "window.location.href= 'https://app.robofy.ai/widget/chatbotdashboard'");
                loginElement.innerHTML = "Dashboard";
                loginElement.style.border = "1px solid #2F80ED";
                loginElement.style.padding = "8px 20px";
                loginElement.style.margin = "0px 5px";
                loginElement.style.color = "#2F80ED";
                loginElement.style.background = "#fff";
                loginElement.style.borderRadius = "30px";
                loginElement.style.fontWeight = "600";
                //mobile button settings
                var loginElement = document.getElementById('HyperLink5');
                $("#HyperLink5").attr("onclick", "window.location.href= 'https://app.robofy.ai/widget/chatbotdashboard'");
                isAlreadyLoggedIn = 1;
                loginElement.innerHTML = "Dashboard";
                loginElement.style.border = "1px solid #2F80ED";
                loginElement.style.padding = "8px 20px";
                loginElement.style.margin = "0px 5px";
                loginElement.style.color = "#2F80ED";
                loginElement.style.background = "#fff";
                loginElement.style.borderRadius = "30px";
                loginElement.style.fontWeight = "600";
            } else {
                var loginElement = document.getElementById('hlDemo');
                loginElement.innerHTML = "Login/Signup";
            }
        }

        // Call the function on page load
        window.onload = alertEmailIDFromCookie;

        var mode = "paid";
        if (mode == "paid") {
            var demoSignupElement = document.getElementById('demoSignup');
            var demoSignupElementMbl = document.getElementById('HyperLink4');
            demoSignupElement.classList.remove("btn-pink-filled");
            demoSignupElementMbl.classList.remove("btn-pink-filled");
            demoSignupElement.removeAttribute('onclick');
            demoSignupElementMbl.removeAttribute('onclick');
            demoSignupElement.innerHTML = '<a href="/ai-chatbot-pricing" class="btn-pink-filled">Buy Now</a>';
            demoSignupElementMbl.innerHTML = '<a href="/ai-chatbot-pricing" class="btn-pink-filled">Buy Now</a>';
        }


        if (location.pathname.toLowerCase() == "/wordpress-ai-chatbot-pricing-plan.aspx" || location.pathname.toLowerCase() == "/wordpress-ai-chatbot-lifetime-plan") {
            var demoSignupElement = document.getElementById('demoSignup');
            demoSignupElement.classList.remove("btn-pink-filled");
            demoSignupElement.removeAttribute('onclick');
            demoSignupElement.innerHTML = '<a href="https://www.robofy.ai/wordpress-ai-chatbot-lifetime-plan#pricingBlock" class="btn-pink-filled">Buy Now</a>';
        }
        if (location.pathname.toLowerCase() == "/ai-chatbot-pricing-plan.aspx" || location.pathname.toLowerCase() == "/ai-chatbot-lifetime-plan") {
            var demoSignupElement = document.getElementById('demoSignup');
            demoSignupElement.classList.remove("btn-pink-filled");
            demoSignupElement.removeAttribute('onclick');
            demoSignupElement.innerHTML = '<a href="https://www.robofy.ai/ai-chatbot-lifetime-plan#pricingBlock" class="btn-pink-filled">Buy Now</a>';
        }

        function startGoogleLogin() {
            $.ajax({
                url: '/svc.asmx/startGoogleLogin',
                type: 'POST',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    window.location.href = data.d;
                }
            });
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function deleteCookies(CookieName) {
            var cookies = document.cookie.split(";");
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                if (cookie != null && cookie != "" && CookieName == name.replace(" ", "")) {
                    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    return false;
                }
            }
        }
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function openLoginPopup(slotNumber) {
            $('#WebsiteModal1').modal('show');
            $('#myLoginModal').modal('hide');
            $('#OTPmodal').modal('hide');
            $('#menuModal').modal('hide');

            try {
                document.getElementById("icon-rain").style.display = "none";
            }
            catch (e) { }
            return false;
        }

        var timer2 = "1:01";

        $("#OTPVerify").keypress(function () {
            $("#optSendButton").prop("disabled", false);
            if (event.which != 8 && isNaN(String.fromCharCode(event.which))) { event.preventDefault(); }
        })
        $("#OTPVerify").bind({
            paste: function () {
                $("#optSendButton").prop("disabled", false);
            },
        });
        function openLoginPopup1(slotNumber) {
            $("#optSendButton").prop("disabled", false);
            if (name && mobileNumber && emailId1 && companyname && countrycode) {
                if (location.pathname.toLowerCase() == "/chatbot.aspx" || location.pathname.toLowerCase() == "/ai-chatbot") {
                    loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot");
                } else if (location.pathname.toLowerCase() == "/wp-ai-chatbot.aspx" || location.pathname.toLowerCase() == "/wordpress-ai-chatbot") {
                    loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "wp-ai-chatbot");
                } else if (location.pathname.toLowerCase() == "/affiliate.aspx" || location.pathname.toLowerCase() == "/affiliate") {
                    loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot-affiliate");
                } else {
                    loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot");
                }
            }

            var emailId = $("#tbxLogin").val();
            var mobileNumber = $("#mblnumrow").val();
            $("#emailVal").val(emailId);
            try {
                emailId = document.getElementById('tbxLogin').value.trim();
            } catch (e) {
            }

            
            if (emailId.length < 5 || emailId.length > 150) {
                document.getElementById('errormsgProData1').innerHTML = "Email should be between 5-150 characters.";
                document.getElementById('tbxLogin').focus();

                return false;
            } else {
                $('#myLoginModal').modal('hide');
                $('#OTPmodal').modal('show');
                $(".resendBtn").addClass('disabled');
                $(".resendBtn").removeAttr('onclick');
                $('#emailVal').html($('#tbxLogin').val() + '<span><br /><a style="color: #007bff; cursor: pointer;" onclick="return openLoginPopup();">Change Email Address</a></span>');



                if (emailId != '' || mobile != '') {
                    var settings = {
                        "url": "/svc.asmx/getotpdetails?Email=" + emailId + "&source=ai-chatbot",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "Content-Type": "application/x-www-form-urlencoded"
                        }
                    };
                    timer2 = "1:01";
                    var interval = setInterval(function () {
                        var timer = timer2.split(':');
                        //by parsing integer, I avoid all extra string processing
                        var minutes = parseInt(timer[0], 10);
                        var seconds = parseInt(timer[1], 10);
                        --seconds;
                        minutes = (seconds < 0) ? --minutes : minutes;

                        seconds = (seconds < 0) ? 59 : seconds;
                        seconds = (seconds < 10) ? '0' + seconds : seconds;
                        //minutes = (minutes < 10) ?  minutes : minutes;
                        $('.countdown').html(" in " + minutes + ':' + seconds);
                        timer2 = minutes + ':' + seconds;

                        if (minutes < 0) {
                            clearInterval(interval);
                            $(".countdown").html('');
                            $(".resendBtn").removeClass('disabled');
                            $(".resendBtn").attr("onclick", "return openLoginPopup1()");
                        }
                    }, 1000);
                    var xhrPro = $.ajax(settings).done(function (response) {
                        const obj = JSON.parse(response);
                        if (obj.Response == 1) {
                            $(".resendBtn").addClass('disabled');
                            $(".resendBtn").removeAttr('onclick');
                            $('#OTPmodal').modal('show');
                            $('#myLoginModal').modal('hide');
                            document.getElementById('errormsgProDataOtp').innerHTML = "An email with OTP is sent.";
                        } else {
                            document.getElementById('errormsgProData1').innerHTML = "There was some error. Please try after some time.";
                        }
                    });
                    xhrPro.fail(function (xhrPro, textStatus, error) {
                        document.getElementById('errormsgProData1').innerHTML = "There was some error while saving. Please try after some time.";
                        // Error handling stuff here ...
                    });
                }
            }
        }

        function openLoginPopup2(slotNumber) {
            //$('#OTPmodal').modal('hide');
            //$('#loginModal1').modal('show');
            $("#optSendButton").prop("disabled", true);
            var emailId = $("#tbxLogin").val();
            $("#emailVal").val(emailId);
            var OTPVerify = $("#OTPVerify").val();
            var settings = {
                "url": "/svc.asmx/ValidOtpDetails?Email=" + emailId + "&OTP=" + OTPVerify + "&source=ai-chatbot",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            };

            var xhrPro = $.ajax(settings).done(function (response) {
                const obj = JSON.parse(response);
                if (obj.AccountId != null && obj.AccountId != "") {
                    $("#accountID").val(obj.AccountId);
                }
                if (obj.Response == 1) {
                    if (obj.loginUrl != null && obj.loginUrl != '') {
                        window.location.href = obj.loginUrl;
                    } else {
                        $('#OTPmodal').modal('hide');
                        $('#loginModal1').modal('show');
                        //$.get("flag.html", function (data) {
                        //    if (fromClick) {
                        //        $(".phonetxtbox").append(data);
                        //        $('.PhComponent').show();
                        //    }
                        //})
                    }
                } else if (obj.Response == -2) {
                    $('#OTPmodal').modal('hide');
                    $('#loginModal1').modal('show');
                    //$.get("flag.html", function (data) {
                    //    if (fromClick) {
                    //        $(".phonetxtbox").append(data);
                    //        $('.PhComponent').show();
                    //    }
                    //})
                } else {
                    document.getElementById('errormsgProDataOtp').innerHTML = obj.Message;
                }
            });
            xhrPro.fail(function (xhrPro, textStatus, error) {
                document.getElementById('errormsgProDataOtp').innerHTML = "There was some error while saving. Please try after some time.";
                // Error handling stuff here ...
            });
        }
        //var savedURL = "";

        //function saveURL() {
        //    // Get the input value
        //    savedURL = document.getElementById("urlInput").value;
        //    openLoginPopup('0');
        //}
        function addWebsiteApi(step,position) {
            document.getElementById('errormsgProData4').innerHTML = "";
			if(position == 1){
            var websiteURL = $("#websiteURL").val();
			}else{
            var websiteURL = $("#websiteURL2").val();
			}
            var websitelanguage = $("#websitelanguage").val();
            
            localStorage.setItem("websiteURL", websiteURL);
            localStorage.setItem("websitelanguage", websitelanguage);
            // Get the value of the URL input field
            var websiteURL = websiteURL.trim();

            // Check if the URL input is empty
            if (websiteURL === '' || websiteURL.replace("https://www.","") == "") {
                document.getElementById("addWebsiteerror").innerHTML = "Please enter website URL to proceed further.";
                document.getElementById('websiteURL').focus();
                return;
            }
            var websitePattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/i;
            if (!websiteURL.replace("https://www.", "").match(websitePattern)) {
                document.getElementById("addWebsiteerror").innerHTML = "Invalid website URL.";
                return;
            }
            
            if (step == 1) {
                
                $("#WebsiteModal1").modal("hide");
                $("#myLoginModal").modal("show");
                
            }
            if (step == 2) {
                ajaxAddWebsiteApi();
            }
            
        }
        function ajaxAddWebsiteApi() {
            var emailId1 = $("#emailVal").val();
            var accountID = $("#accountID").val();
            var websiteURL = $("#websiteURL").val();
            var websitelanguage = $("#websitelanguage").val();
            
            
            if (localStorage.getItem("websiteURL") && localStorage.getItem("websitelanguage")) {
                var settings = {
                   
                    "url": "https://api.robofy.ai/v1/add-website-v2",
                    "method": "POST",
                    "timeout": 0,
                    "data": { Email: emailId1, AccountId: accountID, SiteURL: localStorage.getItem("websiteURL"), Language : localStorage.getItem("websitelanguage") },
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }
                };

                var xhrPro = $.ajax(settings).done(function (response) {
                    if (response.responseStatusCode == 200) {
                        popupDetail(4);
                    } else {
                        $("#WebsiteModal1").modal("show");
                        $("#loginModal1").modal("hide");
                        document.getElementById('errormsgProData4').innerHTML = response.Message;
                        $("#websiteURL").val(localStorage.getItem("websiteURL"));
                        $("#addWebsiteButton").attr("onclick", "return addWebsiteApi('2')");
                    }
                });
                xhrPro.fail(function (xhrPro, textStatus, error) {
                    document.getElementById('errormsgProData3').innerHTML = "There was some error while saving. Please try after some time.";
                    // Error handling stuff here ...
                });
            }
        }
        function popupDetail(step) {
            //var input4 = document.querySelector("#getnumber");
            //document.getElementById("websiteURL").value = savedURL;
            var name = $("#namee").val();
            var mobileNumber = document.querySelector("#getnumber").value;
            var emailId1 = $("#emailVal").val();
            var companyname = $("#companyName").val();
            var countrycode = $("#getCountrynumber").val();
            if (name && mobileNumber.trim() && emailId1 && countrycode.trim() && companyname) {
				if (location.pathname.toLowerCase() == "/chatbot.aspx" || location.pathname.toLowerCase() == "/ai-chatbot") {
					loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot", step);
				} else if (location.pathname.toLowerCase() == "/wp-ai-chatbot.aspx" || location.pathname.toLowerCase() == "/wordpress-ai-chatbot") {
					loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "wp-ai-chatbot", step);
				}  else if (location.pathname.toLowerCase() == "/affiliate.aspx" || location.pathname.toLowerCase() == "/affiliate") {
					loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot-affiliate", step);
				} else {
					loginAcc(emailId1, countrycode, mobileNumber, name, companyname, "ai-chatbot", step);
				}
            }
            else {
                if (!name) {
                    document.getElementById('errormsgProData3').innerHTML = "Please Enter Name.";
                } else if (!companyname) {
                    document.getElementById('errormsgProData3').innerHTML = "Please Enter Company Name.";
                } else if (!mobileNumber) {
                    document.getElementById('errormsgProData3').innerHTML = "Please Enter Mobile Number.";
                } else if (!countrycode) {
                    document.getElementById('errormsgProData3').innerHTML = "Please Enter Country Code.";
                } else {
                    document.getElementById('errormsgProData3').innerHTML = "Please Enter Valid Details";
                }
            }

        }
        function loginAcc(emailId1, countrycode, mobileNumber, name, companyname, source, step) {
            if (source == null) {
                source = "ai-chatbot";
            }
            var settings = {
                "url": "/svc.asmx/UpdateUserOtherDetails?email=" + emailId1 + "&countryCode=" + countrycode + "&mobile=" + mobileNumber + "&name=" + name + "&compnayName=" + companyname + "&source=" + source,
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            };

            var xhrPro = $.ajax(settings).done(function (response) {
                const obj = JSON.parse(response);
                if (obj.Response == 1) {
                    if (obj.loginUrl != null && obj.loginUrl != '') {
                        if (step == 3) {
                            //$('#loginModal1').modal('hide');
                            //$('#WebsiteModal1').modal('show');
							if(localStorage.getItem("websiteURL") && localStorage.getItem("websitelanguage")){
								ajaxAddWebsiteApi();
							}else{
								window.location.href = obj.loginUrl;
							}
                        } else if (step == 4) {
                            window.location.href = obj.loginUrl;
                        } else {
                            window.location.href = obj.loginUrl;
                        }
                    }
                    document.getElementById('errormsgProData3').innerHTML = obj.Message;
                } else {
                    document.getElementById('errormsgProData3').innerHTML = obj.Message;
                }
            });
            xhrPro.fail(function (xhrPro, textStatus, error) {
                document.getElementById('errormsgProData3').innerHTML = "There was some error while saving. Please try after some time.";
                // Error handling stuff here ...
            });
        }


        if (getCookie("googleObj") && getUrlParameter('verified')) {
            var data = JSON.parse(getCookie("googleObj").replace('googleObj=', ''));
            if (getUrlParameter('verified') == data.id && data.verified_email) {
                document.getElementById('errormsgProData1').innerHTML = "";
                var xhrPro = $.ajax({
                    type: "POST",
                    url: "/svc.asmx/GetLoginByEmail",
                    data: "{'emailAddress':'" + data.email + "','isFrom':'fromgoogle'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        var obj = JSON.parse(response.d);
                        if (obj.IsNewuser == '1') {
                            $("#emailVal").val(data.email);
                            $('#loginModal1').modal('show');
                        } else {
                            if (response.d) {
                                window.location.href = obj.LoginURL;
                            }
                        }
                    },
                    failure: function (response) {
                        resetBtnProData();
                    }
                });
                xhrPro.fail(function (xhrPro, textStatus, error) {
                    resetBtnProData();
                    document.getElementById('errormsgProData1').innerHTML = "There was some error while login. Please try after some time.";
                    // Error handling stuff here ...
                });
            } else {
                document.getElementById('errormsgProData1').innerHTML = "Something went wrong, try another login/signup method";
            }
        }
        $(document).ready(function () {
            $(".dropdown").hover(function () {
                var dropdownMenu = $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        });


        $(document).ready(function () {
            var lastScrollTop = 0;
            $(window).scroll(function () {
                var st = $(this).scrollTop();
                if (st < lastScrollTop) {
                    $("#navbarmenudesktop").css("top", "0px");
                    $("#top-bar-min").css("top", "0");
                } else {
                    if ($(document).scrollTop() > 500) {
                        $("#navbarmenudesktop").css("top", "-150px");
                        $("#top-bar-min").css("top", "-150px");
                    }
                    else {
                        $("#navbarmenudesktop").css("top", "0px");
                        $("#top-bar-min").css("top", "0");
                    }
                }
                lastScrollTop = st;
            });
            /*$("#buttonAsperPage").html(`<button onclick="$('#loginModal1').modal('hide');$('#WebsiteModal1').modal('show')" type="button" class="btn-cyan-filled w-100 font-weight-bold mx-auto">Continue</button>`);*/
        });

        function openMenu() {
            $('#menuModal').modal('show');
        }

        var options = {
            "key": "",
            "amount": "",
            "name": "Whatso Inc",
            "data-razorpay_payment_id": '',
            "order_id": "", // Pass the order ID if you are using Razorpay Orders.
            "currency": "INR",
            "description": "",
            "image": "https://www.whatso.net/images/razor-whatso-logo.png",
            "handler": function (response) {
                window.location.href = "/paymentdone?mode=rpay&rpi=" + response.razorpay_payment_id + "&oid=" + response.razorpay_order_id + "&sig=" + response.razorpay_signature;

            },
            "prefill": {
                "name": "",
                "email": "",
                "contact": ""
            },
            "notes": {
                "address": ""
            },
            "theme": {
                "color": "#31bb42"
            }
        };

        $(document).ajaxSend(function () {
            $('#ajaxloader').fadeIn(250);
        });
        $(document).ajaxComplete(function () {
            $('#ajaxloader').fadeOut(250);
        });
        $("select[name='countries']").change(function () {
            setCookie("countries", $("select[name='countries'] option:selected").attr("data-country"), "30");
        })
        $("select[name='currency']").change(function () {
            setCookie("currency", $(this).val(), "30");
        });
        if (getCookie("currency") != null && getCookie("currency") != '') {
            $("select[name='currency']").find("option[value='" + getCookie("currency") + "']").prop('selected', true);
        }
        if (getCookie("countries") != null && getCookie("countries") != '') {
            $("select[name='countries']").find("option[data-country='" + getCookie("countries") + "']").prop('selected', true);
        }
