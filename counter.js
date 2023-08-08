document.addEventListener("DOMContentLoaded", function () {
    fetchVisitCount();
});

function fetchVisitCount() {
    fetch("counter.php") // Replace with the path to your server-side script
        .then(response => response.text())
        .then(count => {
            document.getElementById("visitCount").textContent = count;
        })
        .catch(error => {
            console.error("Error fetching visit count:", error);
        });
}
