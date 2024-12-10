<!DOCTYPE html>
<html>

<head>
    <title>transgender.cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/document.css')
</head>

<body>
    <div class="print-margin">
        <div class="print-page">
            <h1>Deed Poll - Deed of change of name</h1>
            <p>I, <b><?php echo request()->post('acname') ?></b> of <b><?php echo request()->post('deedaddress1') ?></b>, <b><?php echo request()->post('deedaddress2') ?></b>, <b><?php echo request()->post('deedpostcode') ?></b>, on the date <b><?php echo request()->post('dd') .'/' . request()->post('mm') .'/' . request()->post('yyyy') ?></b>, absolutely and entirely renounce, relinquish and abandon the use of my old name of <b><?php echo request()->post('dname') ?></b> and assume, adopt and determine to take and use from the date of this Deed, my new name of <b><?php echo request()->post('acname') ?></b> in substitution for my old name of <b><?php echo request()->post('dname') ?></b>.</p>
            <p>I shall at all times from this date in all records, documents and other writings and in all my actions and proceedings as well as in all dealings and transactions and on all occasions use my new name of <b><?php echo request()->post('acname') ?></b> in substitution for my old name of <b><?php echo request()->post('dname') ?></b>. I may after this be called, known or distinguished not by the old name of <b><?php echo request()->post('dname') ?></b>, but by the new name of <b><?php echo request()->post('acname') ?></b>.</p>
            <p>I authorise and require all persons at all times to designate and address me by my adopted new name of <b><?php echo request()->post('acname') ?></b>.</p>
            <h4>Witnessed by:</h4>
            <div class="flex-container">
                <div class="flex-div">
                    <p>Witness name:<br><b><?php echo request()->post('wt1name') ?></b></p>
                    <p>Witness address line 1:<br><b><?php echo request()->post('wt1address1') ?></b></p>
                    <p>Witness address line 2:<br><b><?php echo request()->post('wt1address2') ?></b></p>
                    <p>Witness postcode:<br><b><?php echo request()->post('wt1postcode') ?></b></p>
                    <p>Witness occupation:<br><b><?php echo request()->post('wt1occupation') ?></b></p>
                </div>
                <div class="flex-div">
                    <p>Witness name:<br><b><?php echo request()->post('wt2name') ?></b></p>
                    <p>Witness address line 1:<br><b><?php echo request()->post('wt2address1') ?></b></p>
                    <p>Witness address line 2:<br><b><?php echo request()->post('wt2address2') ?></b></p>
                    <p>Witness postcode:<br><b><?php echo request()->post('wt2postcode') ?></b></p>
                    <p>Witness occupation:<br><b><?php echo request()->post('wt2occupation') ?></b></p>
                </div>
            </div>
            <h4>Signed and delivered:</h4>
            <div class="flex-container">
                <div class="flex-div">
                    <p>As a witness:<br><b><?php echo request()->post('wt1name') ?></b></p>
                    <div class="sign-box"></div>
                    <p>As a Deed by:<br><b><?php echo request()->post('acname') ?></b></p>
                    <div class="sign-box"></div>
                </div>
                <div class="flex-div">
                    <p>As a witness:<br><b><?php echo request()->post('wt2name') ?></b></p>
                    <div class="sign-box"></div>
                    <p>Formerly:<br><b><?php echo request()->post('dname') ?></b></p>
                    <div class="sign-box"></div>
                </div>
            </div>
        </div>
    </div>
    <button class="float" onclick="window.print()">
        <svg class="print-button" viewBox="0 0 122.88 114.13" xmlns="http://www.w3.org/2000/svg" role=img>
            <title>Print</title>
            <path d="M23.2,29.44V3.35V0.53C23.2,0.24,23.44,0,23.73,0h2.82h54.99c0.09,0,0.17,0.02,0.24,0.06l1.93,0.8l-0.2,0.49l0.2-0.49 c0.08,0.03,0.14,0.08,0.2,0.14l12.93,12.76l0.84,0.83l-0.37,0.38l0.37-0.38c0.1,0.1,0.16,0.24,0.16,0.38v1.18v13.31 c0,0.29-0.24,0.53-0.53,0.53h-5.61c-0.29,0-0.53-0.24-0.53-0.53v-6.88H79.12H76.3c-0.29,0-0.53-0.24-0.53-0.53 c0-0.02,0-0.03,0-0.05v-2.77h0V6.69H29.89v22.75c0,0.29-0.24,0.53-0.53,0.53h-5.64C23.44,29.97,23.2,29.73,23.2,29.44L23.2,29.44z M30.96,67.85h60.97h0c0.04,0,0.08,0,0.12,0.01c0.83,0.02,1.63,0.19,2.36,0.49c0.79,0.33,1.51,0.81,2.11,1.41 c0.59,0.59,1.07,1.31,1.4,2.1c0.3,0.73,0.47,1.52,0.49,2.35c0.01,0.04,0.01,0.08,0.01,0.12v0v9.24h13.16h0c0.04,0,0.07,0,0.11,0.01 c0.57-0.01,1.13-0.14,1.64-0.35c0.57-0.24,1.08-0.59,1.51-1.02c0.43-0.43,0.78-0.94,1.02-1.51c0.21-0.51,0.34-1.07,0.35-1.65 c-0.01-0.03-0.01-0.07-0.01-0.1v0V43.55v0c0-0.04,0-0.07,0.01-0.11c-0.01-0.57-0.14-1.13-0.35-1.64c-0.24-0.56-0.59-1.08-1.02-1.51 c-0.43-0.43-0.94-0.78-1.51-1.02c-0.51-0.22-1.07-0.34-1.65-0.35c-0.03,0.01-0.07,0.01-0.1,0.01h0H11.31h0 c-0.04,0-0.08,0-0.11-0.01c-0.57,0.01-1.13,0.14-1.64,0.35C9,39.51,8.48,39.86,8.05,40.29c-0.43,0.43-0.78,0.94-1.02,1.51 c-0.21,0.51-0.34,1.07-0.35,1.65c0.01,0.03,0.01,0.07,0.01,0.1v0v35.41v0c0,0.04,0,0.08-0.01,0.11c0.01,0.57,0.14,1.13,0.35,1.64 c0.24,0.57,0.59,1.08,1.02,1.51C8.48,82.65,9,83,9.56,83.24c0.51,0.22,1.07,0.34,1.65,0.35c0.03-0.01,0.07-0.01,0.1-0.01h0h13.16 v-9.24v0c0-0.04,0-0.08,0.01-0.12c0.02-0.83,0.19-1.63,0.49-2.35c0.31-0.76,0.77-1.45,1.33-2.03c0.02-0.03,0.04-0.06,0.07-0.08 c0.59-0.59,1.31-1.07,2.1-1.4c0.73-0.3,1.52-0.47,2.36-0.49C30.87,67.85,30.91,67.85,30.96,67.85L30.96,67.85L30.96,67.85z M98.41,90.27v17.37v0c0,0.04,0,0.08-0.01,0.12c-0.02,0.83-0.19,1.63-0.49,2.36c-0.33,0.79-0.81,1.51-1.41,2.11 c-0.59,0.59-1.31,1.07-2.1,1.4c-0.73,0.3-1.52,0.47-2.35,0.49c-0.04,0.01-0.08,0.01-0.12,0.01h0H30.96h0 c-0.04,0-0.08-0.01-0.12-0.01c-0.83-0.02-1.62-0.19-2.35-0.49c-0.79-0.33-1.5-0.81-2.1-1.4c-0.6-0.6-1.08-1.31-1.41-2.11 c-0.3-0.73-0.47-1.52-0.49-2.35c-0.01-0.04-0.01-0.08-0.01-0.12v0V90.27H11.31h0c-0.04,0-0.08,0-0.12-0.01 c-1.49-0.02-2.91-0.32-4.2-0.85c-1.39-0.57-2.63-1.41-3.67-2.45c-1.04-1.04-1.88-2.28-2.45-3.67c-0.54-1.3-0.84-2.71-0.85-4.2 C0,79.04,0,79,0,78.96v0V43.55v0c0-0.04,0-0.08,0.01-0.12c0.02-1.49,0.32-2.9,0.85-4.2c0.57-1.39,1.41-2.63,2.45-3.67 c1.04-1.04,2.28-1.88,3.67-2.45c1.3-0.54,2.71-0.84,4.2-0.85c0.04-0.01,0.08-0.01,0.12-0.01h0h100.25h0c0.04,0,0.08,0,0.12,0.01 c1.49,0.02,2.91,0.32,4.2,0.85c1.39,0.57,2.63,1.41,3.67,2.45c1.04,1.04,1.88,2.28,2.45,3.67c0.54,1.3,0.84,2.71,0.85,4.2 c0.01,0.04,0.01,0.08,0.01,0.12v0v35.41v0c0,0.04,0,0.08-0.01,0.12c-0.02,1.49-0.32,2.9-0.85,4.2c-0.57,1.39-1.41,2.63-2.45,3.67 c-1.04,1.04-2.28,1.88-3.67,2.45c-1.3,0.54-2.71,0.84-4.2,0.85c-0.04,0.01-0.08,0.01-0.12,0.01h0H98.41L98.41,90.27z M89.47,15.86 l-7-6.91v6.91H89.47L89.47,15.86z M91.72,74.54H31.16v32.89h60.56V74.54L91.72,74.54z" />
        </svg>
    </button>
</body>

</html>