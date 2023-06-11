/**
 * Declaration des variables qui prennent comme id chaque element
 * contenu dans notre générateur situé dans le fichier html
 */
const characterAmountRange = document.getElementById('characterAmountRange')
const characterAmountNumber = document.getElementById('characterAmountNumber')
const uppercaseElement = document.getElementById('uppercase')
const numbersElement = document.getElementById('numbers')
const symbolsElement = document.getElementById('symbols')
const form = document.getElementById('generatorForm')
const displayPwd = document.getElementById('displayPwd')

/**
 * Event listener pour la longueur du mot de passe
 */
characterAmountRange.addEventListener('input', syncCharacterAmount)
characterAmountNumber.addEventListener('input', syncCharacterAmount)

/**
 * Fonction qui lie la molette avec le numero permettant de donner la
 * longueur du mot de passe
 * @param {*} event
 */
function syncCharacterAmount(event) {
    const value = event.target.value
    characterAmountNumber.value = value
    characterAmountRange.value = value
}

/**
 * Function qui prends comme paramètre deux nombres et qui va parcourir et afficher
 * les elements trouvés entres ces nombres de la table ASCII
 * @param {*} low
 * @param {*} high
 * @returns array
 */
function arrayFromLowToHigh(low, high) {
    const array = []
    for (let i = low; i <= high; i++) {
      array.push(i)
    }
    return array
}

/**
 * codes ASCII pour avoir:
 * - lettres en minuscules
 * - lettres en majuscules
 * - nombres
 * - characteres spéciaux
 */
const UPPERCASE_CHAR_CODES = arrayFromLowToHigh(65, 90)
const LOWERCASE_CHAR_CODES = arrayFromLowToHigh(97, 122)
const NUMBER_CHAR_CODES = arrayFromLowToHigh(48, 57)

/**
 * utilisation des "spread operator" (décomposition) ... pour fusionner
 * les tableaux des symbols au lieu d'utiliser "concat"
 */
const SYMBOL_CHAR_CODES = [
    ...arrayFromLowToHigh(33, 47),
    ...arrayFromLowToHigh(58, 64),
    ...arrayFromLowToHigh(91, 96),
    ...arrayFromLowToHigh(123, 126)
]

/**
 * Fonction qui va générer un mot de passe aléatoire par rapport aux spécifications
 * de l'utilisateur
 * @param {*} characterAmount
 * @param {*} uppercase
 * @param {*} numbers
 * @param {*} symbols
 * @returns mot de passe généré
 */

function generatePassword(characterAmount, uppercase, numbers, symbols) {
    //opérateurs térnaires qui définisent la variable charCodes en fonction des valeurs booléennes
    let charCodes = LOWERCASE_CHAR_CODES.concat(
        uppercase ? UPPERCASE_CHAR_CODES : [],
        numbers ? NUMBER_CHAR_CODES : [],
        symbols ? SYMBOL_CHAR_CODES : []
    )

    /**
     * boucle qui sélectione des caractères aléatoires à partir d'un ensemble donné
     * de codes de caractères (charCodes) et les ajoute au tableau generatedPassword[],
     * qui est ensuite joint à une chaîne de caractères pour créer le mot de passe final.
     */
    const generatedPassword = []
    for (let i = 0; i < characterAmount; i++) {
        const characterCode = charCodes[Math.floor(Math.random() * charCodes.length)]
        generatedPassword.push(String.fromCharCode(characterCode))
    }
    return generatedPassword.join('')
}

/**
 * Form submit
 */
form.addEventListener('submit', event => {
    event.preventDefault()
    const characterAmount = characterAmountNumber.value
    const uppercase = uppercaseElement.checked
    const numbers = numbersElement.checked
    const symbols = symbolsElement.checked
    const password = generatePassword(characterAmount, uppercase, numbers, symbols)
    displayPwd.innerText = password  //afficher le mot de passe dans la case
})
