<!DOCTYPE html>
<html>

<head>
    <title>transgender.cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/form.css')

</head>

<body>
    <div class="card">
        <h1>What is a deed poll?</h1>
        <p>A deed poll is a legal document that individuals use to change their name officially and voluntarily,
            allowing you to change any part of your name, add or remove names and hyphens or change spelling often for
            personal, professional, or gender identity reasons. <br><br>It is a straightforward and formal declaration,
            signed
            and witnessed, indicating the person's intention to be known by a new name. <br><br>This document helps
            individuals
            update official records and identification documents to reflect their chosen name. <br><br>You can use
            services like
            this one to create an unenrolled deed poll which 99% of organisations will accept without a covering letter
            explaining why it is not enrolled
            however some organisations may stipulate that the deed poll needs to be enrolled. <br><br>Enrolling a deed
            poll puts
            your name change on the public record and is not necessary and you can usually just explain this to the
            organisation that is asking for your deed poll to be enrolled and they will allow you to use your unenrolled
            deed poll.</p>
    </div>

    <div class="card">
        <div class="card-grid">
            <div class="card-grid-text">
                <h1>Create your deed poll</h1>
                <p>Using the form to the right you can create your own deed poll for free. The completed deed poll has a
                    watermark saying "Official Deed Poll" as we have found when printed it results in more organisations
                    accepting it without asking for it to be enrolled etc.</p>
            </div>

            <div class="card-grid-form">
                <form id="regForm" action="" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <p>By pressing next you confirm that you have read and agree to the privacy policy outlined
                            below.</p>
                    </div>
                    <div class="tab">What's your preferred name?<br><br>
                        <p><input placeholder="New name in full..." oninput="this.className = ''" name="acname"></p>
                    </div>
                    <div class="tab">When did you start using this name?<br><br>
                        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
                        <p><input placeholder="mm" oninput="this.className = ''" name="mm"></p>
                        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                    </div>
                    <div class="tab">What's your deadname?<br><br>
                        <p><input placeholder="Deadname in full..." oninput="this.className = ''" name="dname"></p>
                    </div>
                    <div class="tab">What's your current address? (Your main living address)<br><br>
                        <p><input placeholder="First line of address" oninput="this.className = ''" name="deedaddress1">
                        </p>
                        <p><input placeholder="Town or city" oninput="this.className = ''" name="deedaddress2"></p>
                        <p><input placeholder="Postcode" oninput="this.className = ''" name="deedpostcode"></p>
                    </div>
                    <div class="tab">Who's witnessing this? (18 or over, not related to you or living at the same
                        address as
                        you)<br><br>
                        <p><input placeholder="Their name in full" oninput="this.className = ''" name="wt1name"></p>
                        <p><input placeholder="First line of address" oninput="this.className = ''" name="wt1address1">
                        </p>
                        <p><input placeholder="Town or city" oninput="this.className = ''" name="wt1address2"></p>
                        <p><input placeholder="Postcode" oninput="this.className = ''" name="wt1postcode"></p>
                        <p><input placeholder="Occupation" oninput="this.className = ''" name="wt1occupation"></p>
                    </div>
                    <div class="tab">Who else is witnessing this? (18 or over, not related to you or living at the same
                        address
                        as you)<br><br>
                        <p><input placeholder="Their name in full" oninput="this.className = ''" name="wt2name"></p>
                        <p><input placeholder="First line of address" oninput="this.className = ''" name="wt2address1">
                        </p>
                        <p><input placeholder="Town or city" oninput="this.className = ''" name="wt2address2"></p>
                        <p><input placeholder="Postcode" oninput="this.className = ''" name="wt2postcode"></p>
                        <p><input placeholder="Occupation" oninput="this.className = ''" name="wt2occupation"></p>
                    </div>
                    <div class="button-div">
                        <div>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="active"></span>
                        <span class=""></span>
                        <span class=""></span>
                        <span class=""></span>
                        <span class=""></span>
                        <span class=""></span>
                        <span class=""></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <h1>Privacy Policy</h1>
        <p>
            Last Updated: 23/09/2024
            <br>
            <br>Thank you for using transgender.cafe ("we," "us," or "our"). We are committed to protecting your privacy
            and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use,
            disclose, and safeguard your information when you use our website and services.
            <br>
            <br>By accessing or using transgender.cafe, you agree to the terms of this Privacy Policy. If you do not
            agree with the terms, please do not use our website.
            <br>
            <br>1. Information We Collect:
            <br>
            <br>1.1. Personal Information:
            <br>We collect the following personal information when you use our website to generate a deed poll:
            <br>
            <br>Name
            <br>Address
            <br>Witness names and addresses
            <br>
            <br>1.2. Usage Information:
            <br>We may collect non-personal information about how you use our website, such as the pages you visit and
            the actions you take.
            <br>
            <br>2. How We Use Your Information:
            <br>
            <br>2.1. Deed Poll Generation:
            <br>The personal information collected is solely used to generate a deed poll for you. Once the deed poll is
            generated, your information is not retained.
            <br>
            <br>2.2. Communication:
            <br>We may use your contact information to communicate with you about the deed poll generation process if
            necessary.
            <br>
            <br>3. Data Retention:
            <br>We do not retain your personal information after the deed poll has been generated. Your information is
            automatically deleted, and we do not store it for any other purpose.
            <br>
            <br>4. Sharing of Information:
            <br>We do not sell, trade, or otherwise transfer your personal information to third parties. Your
            information is kept confidential and is not shared with any external entities.
            <br>
            <br>5. Cookies:
            <br>We use cookies on our website provided by cloudflare to stop bots and crawlers and to allow genuine
            users.
            Please see <a href="https://www.cloudflare.com/privacypolicy/">Cloudflares Privacy Policy</a> to understand
            how your data is used when accessing our website.
            <br>
            <br>6. Advertising:
            <br>We do not display third-party advertising on our website.
            <br>
            <br>7. Security:
            <br>We take reasonable measures to protect the confidentiality and security of your personal information.
            However, no method of transmission over the Internet or electronic storage is completely secure, and we
            cannot guarantee absolute security.
            <br>
            <br>8. Changes to the Privacy Policy:
            <br>We reserve the right to update this Privacy Policy at any time. We will notify you of any changes by
            posting the new Privacy Policy on this page.
            <br>
            <br>By using transgender.cafe, you agree to the terms outlined in this Privacy Policy. Please review this
            policy periodically for any updates or changes.
        </p>
    </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)

        document.addEventListener("DOMContentLoaded", function () {
            showTab(currentTab); // Display the first tab
        });

        function showTab(n) {
            var x = document.getElementsByClassName("tab");

            // Display the specified tab
            x[n].style.display = "block";

            // Fix the Previous/Next buttons
            if (n == 0) {
                document.getElementById("prevBtn").style.padding = "0px 0px"
                document.getElementById("prevBtn").style.width = "0px";
                document.getElementById("prevBtn").style.opacity = "0";
                document.getElementById("nextBtn").style.width = "100%";
            } else {
                document.getElementById("prevBtn").style.opacity = "1";
                document.getElementById("prevBtn").style.padding = "10px 20px"
                document.getElementById("prevBtn").style.height = "40px";
                document.getElementById("nextBtn").style.width = "48%";
                document.getElementById("prevBtn").style.width = "48%";
            }

            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            // Validate the form fields
            validateForm();
        }

        // Display the first tab by default

        function nextPrev(n) {

            var x = document.getElementsByClassName("tab");

            if (n == 1 && currentTab == (x.length - 1)) {
                document.getElementById("regForm").submit();
                return false;
            }

            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;

            // Hide the current tab:
            x[currentTab].style.display = "none";

            // Decrease the current tab by 1:
            currentTab += n;

            // If you have reached the beginning of the form...
            if (currentTab < 0) {
                currentTab = 0;
            }

            // Display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className = "invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            fixStepIndicator(currentTab);
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByTagName("span");
            for (i = 0; i < x.length; i++) {
                if (i < currentTab) {
                    x[i].className = "finish"
                } else {
                    x[i].className = "";
                }

            }
            //... and adds the "active" class on the current step:
            x[n].className = "active";
        }
    </script>

</body>

</html>