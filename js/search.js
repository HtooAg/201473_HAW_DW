const googleApiKey = "AIzaSyAlpPvpbVaXxRSZQ2YHFMs2PBdh_8l4_GM";
const customSearchEngineId = "d6cf0087384654d6b";
const searchUrl = `https://www.googleapis.com/customsearch/v1?key=${googleApiKey}&cx=${customSearchEngineId}&q=`;

const searchGoogle = async (searchTerm) => {
	const loadingSpinner = document.querySelector("#loading-spinner");
	const spinnerText = document.querySelector("#spinner-text");

	loadingSpinner.classList.remove("d-none");
	spinnerText.classList.remove("d-none");

	try {
		const res = await fetch(searchUrl + searchTerm);
		const data = await res.json();

		if (data.items && data.items.length > 0) {
			displayResults(data.items);
		} else {
			displayError("No results found.");
		}
	} catch (error) {
		displayError("An error occurred. Please try again later.");
		console.error("Error:", error);
	} finally {
		loadingSpinner.classList.add("d-none");
		spinnerText.classList.add("d-none");
	}
};

document.querySelector("#search-form").addEventListener("submit", async (e) => {
	e.preventDefault();
	const searchTerm = document.querySelector("#search-input").value.trim();

	if (searchTerm !== "") {
		await searchGoogle(searchTerm);
	} else {
		displayError("Please enter a search term.");
		setTimeout(
			() => (document.querySelector("#search-results").innerHTML = ""),
			3000
		);
	}
});

const displayError = (msg) => {
	document.querySelector(
		"#search-results"
	).innerHTML = `<p class="text-danger">${msg}</p>`;
};

const displayResults = (items) => {
	let html = "";
	items.forEach((item) => {
		html += `
            <div class="search-result-card">
                <h3><a href="${item.link}" target="_blank">${item.title}</a></h3>
                <p>${item.snippet}</p>
                <p>Link: <a href="${item.link}" target="_blank">${item.link}</a></p>
                <p>Displayed Link: ${item.displayLink}</p>
                <p>Snippet: ${item.snippet}</p>
            </div>
        `;
	});

	document.querySelector("#search-results").innerHTML = html;
};
