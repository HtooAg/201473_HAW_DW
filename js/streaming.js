const youtubeApiKey = "AIzaSyBpxPl2m5VmPFDDWuTP9piI1QXait84zSU";
const searchUrl = "https://www.googleapis.com/youtube/v3/search";

const searchYouTube = async (searchTerm) => {
	const loadingSpinner = document.querySelector("#loading-spinner");
	const spinnerText = document.querySelector("#spinner-text");

	loadingSpinner.classList.remove("d-none");
	spinnerText.classList.remove("d-none");

	try {
		const res = await fetch(
			`${searchUrl}?part=snippet&maxResults=10&q=${searchTerm}&key=${youtubeApiKey}`
		);
		const data = await res.json();

		if (data.items && data.items.length > 0) {
			displayResults(data.items);
		} else {
			displayError("No results found.");
		}
	} catch (error) {
		displayError("An error occurred. Please try again later.");
	} finally {
		loadingSpinner.classList.add("d-none");
		spinnerText.classList.add("d-none");
	}
};

document.querySelector("#search-form").addEventListener("submit", async (e) => {
	e.preventDefault();
	const searchTerm = document.querySelector("#search-input").value.trim();

	if (searchTerm !== "") {
		await searchYouTube(searchTerm);
	} else {
		displayError("Please enter a search term!");
		setTimeout(
			() => (document.querySelector("#search-results").innerHTML = ""),
			3000
		);
	}
});

const displayError = (msg) => {
	document.querySelector(
		"#search-results"
	).innerHTML = `<p class="text-danger text-center ">${msg}</p>`;
};

const displayResults = (items) => {
	let html = "";
	items.forEach((item) => {
		html += `
            <div class="col-lg-6">
                <div class="card mb-3">
                    <img src="${item.snippet.thumbnails.medium.url}" class="card-img-top" alt="Thumbnail" style="object-fit: cover; width: 100%; height: 300px">
                    <div class="card-body">
                        <h5 class="card-title"><a href="https://www.youtube.com/watch?v=${item.id.videoId}" target="_blank" class="text-decoration-none">${item.snippet.title}</a></h5>
                        <p class="card-text">${item.snippet.description}</p>
                        <a href="https://www.youtube.com/watch?v=${item.id.videoId}" class="btn btn-login px-3" target="_blank">Watch Video</a>
                    </div>
                </div>
            </div>`;
	});

	document.querySelector("#search-results").innerHTML = html;
};
