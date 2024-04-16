document.addEventListener("DOMContentLoaded", () => {
	setTimeout(() => {
		const alertBox = document.querySelector("#alertBox");
		if (alertBox) {
			alertBox.style.display = "none";
		} else {
			return false;
		}
	}, 3000);
});
