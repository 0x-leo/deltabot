<template>
    <div class="m-4 max-w-lg rounded overflow-hidden shadow-lg bg-white">
        <div class="p-4 max-w-xl" v-if="!connected" :key="updateModal">
            <h2 class="text-xl pb-9">Connect your metamask wallet</h2>

            <span>Gain access to our complete MEV arbitrage bot suite. Utilizing cutting-edge algorithms, our bot is designed to execute sophisticated arbitrage trades across a diverse array of decentralized finance protocols. With the ability to identify and capitalize on opportunities for MEV (Miner Extractable Value) in real-time, this highly profitable MEV bot program provides an unparalleled edge in the rapidly evolving DeFi markets.</span>

            <br>
            <br>

            <span>This program is able to navigate the complexities of smart contract interactions and exploit inefficiencies in the market, allowing for a consistent generation of profit. Additionally, our bot is equipped with advanced risk management features, which include customizable stop loss and profit taking options, to ensure optimal performance and protection of your capital.</span>

            <br>
            <br>
            <div class="flex space-x-4">
                <button @click="checkWalletConnected" class="py-2 px-8 rounded button-custom flex">Connect Wallet</button>
            </div>
        </div>

        <div class="p-4 max-w-xl" v-if="connected && !checkoutStep && !processingPayment && !paymentCompleted && !paymentFailed" :key="updateModal">
            <h1 class="text-xl mb-4">MEV arbitrage bot</h1>
            <span>Plants are perfect roommates – they help to create a homely feel and can lift your well-being by reducing stress. And they’re also all quiet when it’s time to go to sleep.</span>
            <br/>

            <div class="flex mt-4">
                <h3>Price: {{itemPrice}}</h3>
              
                <span>(ETH)</span>
            </div>
            <div class="flex border-t border-gray-300 mt-5 pt-5">
                <button @click="proceedToCheckout" type="submit" class="button-custom duration-200 focus:outline-none focus:shadow-outline font-medium h-12 hover:bg-gray-900 inline-flex items-center justify-center px-6 text-white tracking-wide transition w-full">
                    Proceed to checkout
                </button>
            </div>
        </div>

        <div class="p-4 max-w-xl" v-if="checkoutStep" :key="updateModal">

            <span class="">Here is the information regarding order. Please confirm everything is correct and complete your purchase.</span>

            <div class="flex mt-4">
                <h3>Total: {{itemPrice}}</h3>
                
                <span>(ETH)</span>
            </div>

            <div class="flex border-t border-gray-300 mt-5 pt-5">
                <button type="submit" @click="makePaymentRequest" class="button-custom duration-200 focus:outline-none focus:shadow-outline font-medium h-12 hover:bg-gray-900 inline-flex items-center justify-center px-6 text-white tracking-wide transition w-full">
                    Purchase item
                </button>
            </div>
        </div>

        <div class="p-4 max-w-xl" v-if="processingPayment" :key="updateModal">

            <div wire:loading class="h-64 overflow-hidden  opacity-75 flex flex-col items-center justify-center">
                <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
                <h2 class="text-center text-black text-xl font-semibold">Processing payment...</h2>
                <p class="w-3/3 text-center text-black">This may take a few seconds, please don't close this page.</p>
            </div>
        </div>

        <div class="p-4 max-w-xl" v-if="paymentCompleted" :key="updateModal">
            <div wire:loading class="p-8 h-64 overflow-hidden  opacity-75 flex flex-col items-center justify-center">
             
                <h2 class="text-center text-black text-xl font-semibold">Transaction complete!</h2>
                <p class="w-3/3 text-center text-black">Check your email for payment confirmation.</p>
            </div>
        </div>

        <div class="p-4 max-w-xl" v-if="paymentFailed" :key="updateModal">
            <div wire:loading class="h-64 overflow-hidden  opacity-75 flex flex-col items-center justify-center">
          
                <h2 class="text-center text-black text-xl font-semibold">Transaction failed</h2>
                <p class="w-2/3 text-center text-black">Please try again or contact support at: support@support.com</p>
            </div>
        </div>
    </div>
</template>

<script setup>
        import Web3 from 'web3';
        const config = useRuntimeConfig();
        let connected = ref(false);
        let checkoutStep = ref(false);
        let updateModal = ref(0);
        let processingPayment = ref(false);
        let paymentCompleted = ref(false);
        let paymentFailed = ref(false);
        const sellerAddress = '0xecED404840e7f3F757572cF617633813e98c091a';
        let buyerAddress = ref('');
        const itemPrice = ref(5000.00);
        //const itemPriceInWei = ref(Web3.utils.toWei("0.001", 'ether')); // Converts eth to wei
        const itemPriceInWei = "3788264045263900160"; // 5000$ in wei (at time of dev)
        let buyerEmail = ref('');
        checkIfWalletConnected();
        function checkIfWalletConnected() {
            if (window.ethereum.request({ method: 'eth_accounts' }).then(function (accounts) {
                if (accounts.length > 0) {
                    connected.value = true;
                    buyerAddress.value = accounts[0];
                } else {
                    connected.value = false;
                }
            })
            ) {
                connected.value = true;
            } else {
                connected.value = false;
            }
        }
        
        // Function to check if blockchain wallet is connected
        function checkWalletConnected() {
            if (window.ethereum) {
                console.log('MetaMask is installed');
                window.web3 = new Web3(window.ethereum);
                window.ethereum.send('eth_requestAccounts').then(function() {
                    // Get account address
                    window.ethereum.request({ method: 'eth_accounts' })
                    .then(function(accounts) {
                        if (accounts.length > 0) {
                            var address = accounts[0];
                            buyerAddress.value = address;
                            connected.value = true;
                            updateModal.value++;
                        } else {
                            address = false;
                        }
                    });
                });
            } else if (window.web3) {
                window.web3 = new Web3(window.web3.currentProvider);
                connected = true;
                // Force update of the modal
                updateModal.value++;
            } else {
                connected = false;
            }
        }
        function proceedToCheckout() {
            checkoutStep.value = true;
            paymentFailed.value = false;
            // Force update of the modal
            updateModal.value++;
        }
        function makePaymentRequest() {
            // Make request to create payment request
            checkoutStep.value = false;
            processingPayment.value = true;
            // Start wallet payment process
            window.ethereum.request({ method: 'eth_sendTransaction', params: [{ from: buyerAddress.value, to: sellerAddress, value: itemPriceInWei }] })
            .then(response => {
                console.log(response);
                processingPayment.value = false;
                paymentCompleted.value = true;
            })
            .catch(error => {
                processingPayment.value = false;
                paymentFailed.value = true;
            });
        }
      </script>

<style scoped>
.pb-9 {
margin-bottom: -50px;
}
    .button-custom {
        background-color: #5554d4;
        color: #fff;
        border: none;
    }
    .disabled-custom {
        background-color: #ccc;
        color: #fff;
        cursor: auto;
    }
    .loader {
        border-top-color: #3498db;
        -webkit-animation: spinner 1.5s linear infinite;
        animation: spinner 1.5s linear infinite;
    }
    @-webkit-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }
    @keyframes spinner {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
