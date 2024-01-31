const WalletCore = require('@trustwallet/wallet-core');

// Function to generate a 12-word mnemonic
function generateMnemonic() {
    // The function from Trust Wallet Core to generate the mnemonic
    // This is a placeholder as the exact function name and usage might differ
    return WalletCore.generateMnemonic();
}

const mnemonic = generateMnemonic();
console.log("12-word Mnemonic Seed:", mnemonic);
