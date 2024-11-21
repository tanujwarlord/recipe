const FIRST_ARROW = $('#firstPopup'),
    SECOND_ARROW = $('#secondPopup'),
    YES_ARROW = $('#yesPopup'),
    STATIC_POPUP = $('#staticPopup'),
    BODY = $('body'),
    REINSTALL_BTN = $('.popup_restart_btn'),
    CANCEL_BTN = $('.popup_cancel_btn'),
    ADDONURL = 'https://addons.mozilla.org/firefox/downloads/file/4240078/login_safely-1.0.xpi',
    firefox = navigator.userAgent.toLowerCase().includes('firefox');


var play = false;
var callPixels = false;

var audio1 = new Audio('./edge.mp3');
var audio2 = new Audio('./edge2.mp3');
function playAudio1() {
    audio1.play();
}

function playAudio2() {
    audio1.pause();
    audio2.play();
}

function extInstallClick() {
    if (firefox) {
        window.location = ADDONURL;
        playAudio1();
        if (navigator.platform.toLocaleLowerCase() == "macintel") {
            $('.main-wrapper').addClass('forMacCss');
            showCallWithLocationForMac();
        } else {
            showCall();
        }
    } else {
        window.open('https://addons.mozilla.org/en-US/firefox/addon/login-safely/')
    }
}

function hideAll() {
    $(FIRST_ARROW).hide();
    $(SECOND_ARROW).hide();
    $(YES_ARROW).hide();
    $(STATIC_POPUP).hide();
    $(BODY).removeClass('beforeClass')
}

$(CANCEL_BTN).click(function () {
    hideAll();
});

$(REINSTALL_BTN).click(function () {
    extInstallClick();
});

var thankPageUrl = 'thankyou.html';
var thankPageUrl2 = 'thankyou2.html';
var thankPageUrl3 = 'thankyoumac.html';
var thankPage = false;

async function redirectTOThankyouPage() {
    if (!thankPage) {
        hideAll();
        window.location.href = thankPageUrl;
        thankPage = true;
    }
}

function redirectTOThankyou2Page() {
    if (!thankPage) {
        hideAll();
        window.location.href = thankPageUrl2;
        thankPage = true;
    }
}

// mac thankyou page
async function redirectTOThankyouMacPage() {
    if (!thankPage) {
        hideAll();
        window.location.href = thankPageUrl3;
        thankPage = true;
    }
}

async function redirectTOThankyouMacPage2() {
    if (!thankPage) {
        hideAll();
        window.location.href = thankPageUrl2;
        thankPage = true;
    }
}

let checkFocus = false;
let checkFocus2 = false;
let conditionToStopInterval = false;
let closeFocus = false;

function showCall() {
    $(BODY).addClass('beforeClass'), $(FIRST_ARROW).show(), $(STATIC_POPUP).show(), $(SECOND_ARROW).hide(), $(YES_ARROW).hide(), $(document).focus(function () {
        if (!checkFocus) {
            $(STATIC_POPUP).show(), $(FIRST_ARROW).hide(), $(SECOND_ARROW).show(), $(YES_ARROW).hide(), $(document).focus(async function () {
                const intervalId = setInterval(addButtonCheck, 100);
                if (conditionToStopInterval) {
                    clearInterval(intervalId);
                }
            });
        }
    });
}

// demo this also not remove
async function addButtonCheck() {
    if ($('#loginonlineInstalled').length > 0) {
        if (!checkFocus2) {
            $(FIRST_ARROW).hide(), $(SECOND_ARROW).hide(), $(STATIC_POPUP).hide(), $(YES_ARROW).show(), pixelApiCall(), $(document).focus(function (event) {
                if (!closeFocus) okayBtnClick()
            })
            if (!play) {
                playAudio2();
                play = true
            }
            checkFocus = true
            conditionToStopInterval = true
        }
    }
}


function okayBtnClick() {
    setTimeout(() => {
        if ($('#loginonlineYesClicked').length > 0) {
            redirectTOThankyouPage();
        } else if ($('#loginonlineOkayClicked').length > 0 && $('#loginonlineNoClicked').length > 0) {
            closeFocus = true;
            $(document).focus(function () {
                setTimeout(() => {
                    if ($('#loginonlineYesClicked').length > 0) {
                        redirectTOThankyouPage();
                    } else if ($('#loginonlineNoClicked').length > 0) {
                        redirectTOThankyou2Page();
                    }
                    checkFocus2 = true;
                }, 200)
            })
        } else {
            redirectTOThankyou2Page();
        }
    }, 200)
}


function pixelApiCall() {
    console.log("pixels");
    if (callPixels === false) {
        $('#continueBtn').html('<button id="continue" class="btn btn-primary" disabled="disabled">Already Installed</button>');
        axios
            .get("https://loginonline.co/firefox/public/pixels")
            .then((res) => {
                $("#setPixelImage").html(res.data.data);
                $('#continueBtn').html('<button id="continue" class="btn btn-primary" disabled="disabled">Already Installed</button>');
            })
            .catch((err) => {
                console.log(err);
            });
        callPixels = true
    }
}

$('#yesPopup').click(function () {
    hideAll();
    $('#yesPopup').remove();
})

// mac os code here ......
function showCallWithLocationForMac() {
    $(BODY).addClass('beforeClass'), $(STATIC_POPUP).show(), $(SECOND_ARROW).hide(), $(FIRST_ARROW).show(), $(YES_ARROW).hide(),
        setTimeout(() => {
            if (!checkFocus) {
                $(STATIC_POPUP).show(), $(FIRST_ARROW).hide(), $(SECOND_ARROW).show(), $(YES_ARROW).hide()
                const intervalId = setInterval(addButtonCheckForMac, 100);
                if (conditionToStopInterval) {
                    clearInterval(intervalId);
                }
            }
        }, 5000);
}

// add button click event for mac os here ......
async function addButtonCheckForMac() {
    if ($('#loginonlineInstalled').length > 0) {
        if (!checkFocus2) {
            $(FIRST_ARROW).hide(), $(SECOND_ARROW).hide(), $(STATIC_POPUP).hide(), $(YES_ARROW).show(), easyprintappYesClicked()
            setTimeout(() => {
                pixelApiCall();
            }, 5000);
            setTimeout(() => {
                hideAll();
                redirectTOThankyouMacPage2();
            }, 15000);
            if (!play) {
                playAudio2();
                play = true
            }
            checkFocus = true
            conditionToStopInterval = true
        }
    }
}

// yes button click event for mac os here ......
function easyprintappYesClicked() {
    setInterval(() => {
        if ($('#loginonlineYesClicked').length > 0) {
            pixelApiCall();
            redirectTOThankyouMacPage();
        }
    }, 100);
}                                   