(() => {
    let mobileLinksDisplayed = false;

    let mobileLinks = document.getElementById("mobile-links");
    let headerButton = document.getElementById("js-header-button");
    headerButton.addEventListener("click", HeaderButtonClick);

    let backgroundArray = ["url('images/IMG1Cropped.jpeg')", "url('images/IMG4Cropped.jpeg')", "url('images/IMG3Cropped.jpeg')", "url('images/IMG5Cropped.jpeg')", "url('images/IMG6Cropped.jpeg')", "url('images/IMG7Cropped.jpeg')"];
    let beforeContent = document.getElementById("before-content");
    let backgroundIndex = Math.round(Math.random() * (backgroundArray.length - 1));

    ChangeBeforeContentBackground();
    setInterval(() => {
        ChangeBeforeContentBackground();
    }, 8000);
    
    // This function is for when the user taps on the button with the 3 lines for getting links to other pages
    function HeaderButtonClick() {
        if (mobileLinksDisplayed == false) 
        {
            console.info("Links opened.");

            mobileLinks.style.top = 80;
            mobileLinksDisplayed = true;
        }
        else if (mobileLinksDisplayed == true) 
        {
            console.info("Links closed.");

            mobileLinks.style.top = -425;
            mobileLinksDisplayed = false;
        }
    }

    function ChangeBeforeContentBackground() {
        beforeContent.style.backgroundImage = backgroundArray[backgroundIndex];
        backgroundIndex += 1;

        if (backgroundIndex > backgroundArray.length - 1) {backgroundIndex = 0;}
    }
}) ();