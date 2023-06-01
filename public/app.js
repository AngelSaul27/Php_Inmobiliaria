
function changueContentModal(showElement, current){
    const newElement = document.getElementById(showElement)
    const currentElement = document.getElementById(current)

    currentElement.classList.add('hidden');
    newElement.classList.remove('hidden');
}
