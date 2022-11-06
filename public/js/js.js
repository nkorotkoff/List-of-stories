let input, hashtagArray, container, t;
let add__hashtag = document.querySelector(".add__hashtag");
input = document.querySelector(".control");
container = document.querySelector(".hashtags__wrapper");
hashtagArray = [];

add__hashtag.addEventListener("click", () => {
  if (event.which == 13 || input.value.length > 0) {
    var wrapper = document.createElement("div");

    wrapper.classList.add("inputWrapper");
    var inputInWrapper = document.createElement("input");
    inputInWrapper.classList.add("form__hastags");
    inputInWrapper.value = input.value;
    inputInWrapper.name = "hashtags[]";
    var spanClose = document.createElement("span");
    spanClose.innerHTML = "&times";
    spanClose.classList.add("close");
    wrapper.append(inputInWrapper);
    wrapper.append(spanClose);

    container.appendChild(wrapper);
    let deleteTags = document.querySelectorAll(".close");
    let deleteInputs = document.querySelectorAll(".inputWrapper");
    for (let i = 0; i < deleteTags.length; i++) {
      deleteTags[i].addEventListener("click", () => {
        container.removeChild(deleteInputs[i]);
      });
    }
  }
});
