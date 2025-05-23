function coaErr() {
    document.getElementById("coa__com01__error").classList.add("view");
}
function coaOk() {
    document.getElementById("coa__com01__error").classList.remove("view");
}

function coaClick() {
    $(":input").each(function () {
        this.value = this.value.toUpperCase();
    });
    const catInput = document.getElementById("catInput");
    const lotInput = document.getElementById("lotInput");
    const catNum = catInput.value;
    const lotNum = lotInput.value;
    coaOk();

    fetch(`https://logosbio.com/wp-content/uploads/CoA_${catNum}_${lotNum}.pdf`)
        .then((res) => {
            console.log(res.url);

            if (res.url === `https://logosbio.com/`) {
                coaErr();
            } else return res.blob();
        })
        .then((data) => {
            const a = document.getElementById("downbtn");
            a.href = window.URL.createObjectURL(data);
            a.download = "CoA.pdf";
            a.click();
        })
        .catch((error) => {
            console.log(error);
        });
}
