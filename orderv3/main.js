import { CONSTANTS } from '../orderv3/common.js?ver=1.5';

async function initializeApp() {
  try {
    const orderType = sessionStorage.getItem('productPage')

    
    
    
    if (orderType === CONSTANTS.ORDER_TYPES.moneyTransfer) {
      console.log(sessionStorage.getItem('mtCity'));
      const { mtUIManager } = await import('../orderv3/mtUiManager.js');
      await mtUIManager.init();
    } else if (orderType === CONSTANTS.ORDER_TYPES.forexTransfer) {
      
      const { ForexUIManager } = await import('../orderv3/forexUIManager.js?ver=2.9');
      
      await ForexUIManager.init();
    }
    else{
      location.href='/'
    }
  } catch (error) {
    console.error('Init failed:', error);
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeApp);
} else {
  initializeApp();
}