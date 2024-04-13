const giveTestBtn = document.getElementById("give-test-btn");
const subscriptionIndicator = document.getElementById("subscription-indicator-badge");
const subscriptionPlanLink = document.getElementById("subscription-plan-link");

let createTestLink = "#";

giveTestBtn.addEventListener("click", handleGiveTestBtnClick);

function handleGiveTestBtnClick(evt) {
    if(!subscriptionIndicator) {
        Swal.fire({
            text: "Access to this feature requires a subscription. Subscribe today to unlock exclusive benefits and enjoy this feature to the fullest!",
            icon: "error",
            buttonsStyling: false,
            showCancelButton: true,
            cancelButtonText: "Cancel",
            confirmButtonText: "Buy Now",
            reverseButtons: true,
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            }
        }).then(result => {
            if(result.isConfirmed) {
                window.location.href = subscriptionPlanLink.href;
            }
        });

    } else {
        window.location.href = createTestLink;
    }
}

function initCreateTestLink(link) {
    createTestLink = link;
}
