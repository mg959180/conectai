	//  Pricing switch
	const tableWrapper = document.querySelector(".pricing-table");
	if (tableWrapper) {
		const switchInputs = document.querySelectorAll(".switch-wrapper input");
		const prices = tableWrapper.querySelectorAll(".price");
		const toggleClass = "d-none";

		switchInputs.forEach((switchInput) => {
			switchInput.addEventListener("input", function () {
				prices.forEach((price) => {
					price.classList.add(toggleClass);
				});

				const activePrices = tableWrapper.querySelectorAll(`.price.${switchInput.id}`);
				activePrices.forEach((activePrice) => {
					activePrice.classList.remove(toggleClass);
				});
			});
		});
	}
// Pricing

// select and change the county currency
document.addEventListener("DOMContentLoaded", function() {
    const countrySelect = document.getElementById("country");
    const currencySelect = document.getElementById("currency");
    const priceClass = "priceInr";
    countrySelect.addEventListener("change", function() {
        if (countrySelect.value === "India") {
            currencySelect.innerHTML = `
                <option value="INR - Indian Rupee" selected>INR - Indian Rupee</option>
                <option value="USD - US Dollar">USD - US Dollar</option>
            `;
        } else if (countrySelect.value === "USA") {
            currencySelect.innerHTML = `
                <option value="USD - US Dollar" selected>USD - US Dollar</option>
                <option value="INR - Indian Rupee">INR - Indian Rupee</option>
            `;
        }
    });

    currencySelect.addEventListener("change", function() {
        if (currencySelect.value === "INR - Indian Rupee") {
            countrySelect.value = "India";
        } else if (currencySelect.value === "USD - US Dollar") {
            countrySelect.value = "USA";
        }
    });
});



// Change the pricing list

document.addEventListener("DOMContentLoaded", function() {
    const countrySelect = document.getElementById("country");
    const currencySelect = document.getElementById("currency");
    const priceInrElements = document.querySelectorAll(".priceInr");
    const priceUsdElements = document.querySelectorAll(".priceUsd");

    // Function to show prices based on selected currency
    function showPrices(currency) {
        if (currency === "INR - Indian Rupee") {
            priceInrElements.forEach(element => {
                element.style.display = "block";
            });
            priceUsdElements.forEach(element => {
                element.style.display = "none";
            });
        } else if (currency === "USD - US Dollar") {
            priceInrElements.forEach(element => {
                element.style.display = "none";
            });
            priceUsdElements.forEach(element => {
                element.style.display = "block";
            });
        }
    }

    // Event listener for country select change
    countrySelect.addEventListener("change", function() {
        if (countrySelect.value === "India") {
            currencySelect.value = "INR - Indian Rupee";
            showPrices(currencySelect.value);
        } else if (countrySelect.value === "USA") {
            currencySelect.value = "USD - US Dollar";
            showPrices(currencySelect.value);
        }
    });

    // Event listener for currency select change
    currencySelect.addEventListener("change", function() {
        showPrices(currencySelect.value);
    });

    // Initial execution to show prices based on initial currency selection
    showPrices(currencySelect.value);
});




// for tool tip
// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();
// });




  