// Change icon color for service items
function OpenHeelLife() {
    window.open("https://heellife.unc.edu/", "_blank")
}
function OpenEventsPage() {
    window.open("events.html", "_blank")
}



serviceItems = document.querySelectorAll("#service-item")
serviceItems[0].addEventListener("click", OpenHeelLife)
serviceItems[1].addEventListener("click", OpenEventsPage)

