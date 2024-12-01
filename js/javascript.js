const slider = document.getElementById("myRange");
const sliderValue = document.getElementById("sliderValue");
const rowContainer = document.getElementById("rowContainer");
const randomWordDisplay = document.getElementById("randomWord");
const randomWordBtn = document.getElementById("randomWordBtn");

function updateInputRows() {
    const value = parseInt(slider.value, 10);
    sliderValue.textContent = value;

    updateRandomWord();

    rowContainer.innerHTML = "";

    for (let i = 0; i < 6; i++) {
        const row = document.createElement("div");
        row.className = "row";

        for (let j = 0; j < value; j++) {
            const input = document.createElement("input");
            input.type = "text";
            input.maxLength = 1;
            input.className = "letter-input";

            input.disabled = i > 0;

            input.addEventListener("input", handleInput);
            input.addEventListener("keydown", handleBackspace);

            row.appendChild(input);
        }

        rowContainer.appendChild(row);
    }

    const firstInput = rowContainer.querySelector(".row:first-child .letter-input");
    if (firstInput) firstInput.focus();
}

function handleInput(event) {
    const input = event.target;

    if (input.value.length === 1) {
        const nextInput = input.nextElementSibling;
        if (nextInput && !nextInput.disabled) {
            nextInput.focus();
        }
    }
}

function handleBackspace(event) {
    const input = event.target;

    if (event.key === "Backspace" && input.value === "") {
        const prevInput = input.previousElementSibling;
        if (prevInput && !prevInput.disabled) {
            prevInput.focus();
        }
    }
}

function getWordArrayByLength(length) {
    switch (length) {
        case 4:
            return wordsArrays.four;
        case 5:
            return wordsArrays.five;
        case 6:
            return wordsArrays.six;
        case 7:
            return wordsArrays.seven;
        case 8:
            return wordsArrays.eight;
        case 9:
            return wordsArrays.nine;
        case 10:
            return wordsArrays.ten;
        case 11:
            return wordsArrays.eleven;
        default:
            return [];
    }
}

function getRandomWord(array) {
    if (!array || array.length === 0) return null;
    const randomIndex = Math.floor(Math.random() * array.length);
    return array[randomIndex];
}

function updateRandomWord() {
    const wordArray = getWordArrayByLength(parseInt(slider.value, 10));
    const randomWord = getRandomWord(wordArray);
    randomWordDisplay.textContent = randomWord || "No words available";
}

updateInputRows();
slider.addEventListener("input", updateInputRows);

randomWordBtn.addEventListener("click", updateRandomWord);