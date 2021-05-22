// Load initial Data
loadData();
async function loadData() {
  const url =
    "https://www.googleapis.com/books/v1/volumes?q=flowers+inauthor:keyes&key=AIzaSyAqlc6scNmX-3ureXZP3w02cOqWul3ZS4U";
  const fetchData = await fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (json) {
      // Get 9 items only
      return json.items.slice(0, 9);
    });
}
