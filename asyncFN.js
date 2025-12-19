var searchLog;

async function getDaKeys(elem) {
    searchLog = elem.value;

    const xhttp = new XMLHttpRequest();

    xhttp.open("GET", "search.php?srch=" + searchLog);
    xhttp.send();
}