!function(e,t){for(var n in t)e[n]=t[n];t.__esModule&&Object.defineProperty(e,"__esModule",{value:!0})}(this,(()=>{"use strict";var e={803:()=>{var e=function(e,t,n){var r=document.createElement("option");return r.value=t,r.text=n,e.appendChild(r),r};!function(t){var n=t.gateway,r=t.table,a=t.metaKey,o=t.tokens,i=t.defaultOptionText,u="_payment_method_meta["+n+"]["+r+"]["+a+"]",d=document.getElementById(u),c=o.some((function(e){return e.tokenId.toString()===d.value}));if(d&&"SELECT"!==d.tagName){var l=document.createElement("select");if(l.id=u,l.name=u,!c){var s=e(l,"",i);s.disabled=!0,s.selected=!0}o.forEach((function(t){e(l,t.tokenId,t.displayName)})),c&&(l.value=d.value),d.parentElement.insertBefore(l,d),d.remove()}}(wcpaySubscriptionEdit)}},t={};return function n(r){if(t[r])return t[r].exports;var a=t[r]={exports:{}};return e[r](a,a.exports,n),a.exports}(803)})());
//# sourceMappingURL=subscription-edit-page.js.map