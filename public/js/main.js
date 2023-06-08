const containerPage = document.querySelector('.container-page')
const images = Array.from(document.querySelectorAll('.image'))
const arrowLeft = document.querySelector('.arrow-left')
const ArrowRight = document.querySelector('.arrow-right')
const cards = document.querySelectorAll(".information-card");

function activateImage(id){
    document.querySelector(`.image[data-id="${id}"]`)
    ?.classList.add('image--active')
}

function removeActives() {
    document.querySelector('.image--active')?.classList.remove('image--active')
  }

document.addEventListener('keyup', function(event){
    const activeImage = document.querySelector('.image--active')
    const {id} = activeImage?.dataset ?? {}

     if (!id) {
        return
     }

      let nextId = null

      if (event.key === 'ArrowRight') {
        if (images.length > Number(id)) {
          nextId = Number(id) + 1
        } else {
          nextId = 1
        }
      }

      if (event.key === 'ArrowLeft') {
        if (Number(id) > 1) {
          nextId = Number(id) - 1
        } else {
          nextId = images.length
        }
      }

      if (nextId) {
        removeActives()
        activateImage(nextId)
    }

})

function setActiveItem(id) {
    cards.forEach(card => {
      if (card.getAttribute("data-id") === id) {
        card.classList.add("active");
      } else {
        card.classList.remove("active");
      }
    });

    images.forEach(image => {
      if (image.getAttribute("data-id") === id) {
        image.classList.add("image--active");
      } else {
        image.classList.remove("image--active");
      }
    });
  }

  function handleArrowClick(event) {
    const currentImage = document.querySelector(".image--active");
    const currentId = currentImage.getAttribute("data-id");
    const arrow = event.target.closest(".container-arrow");
    const isLeftArrow = arrow.classList.contains("arrow-left");

    let nextId;
    if (isLeftArrow) {
        nextId = currentId === "1" ? "4" : (currentId === "2" ? "1" : (currentId === "3" ? "2" : "3"));
    } else {
      nextId = currentId === "1" ? "2" : (currentId === "2" ? "3" : (currentId === "3" ? "4" : "1"));
    }

    setActiveItem(nextId);
  }


  arrowLeft.addEventListener("click", handleArrowClick);
  ArrowRight.addEventListener("click", handleArrowClick);

containerPage.addEventListener('click', function ({target}) {
    if (!target.classList.contains('image') ) {
      return
    }

    removeActives()

    const {id} = target.dataset

    if (id) {
      activateImage(id)
      setActiveItem(id);
    }
  })
