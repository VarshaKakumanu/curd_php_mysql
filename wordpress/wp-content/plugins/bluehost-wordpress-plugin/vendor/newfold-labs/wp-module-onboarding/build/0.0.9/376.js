"use strict";(self.webpackChunknewfold_Onboarding=self.webpackChunknewfold_Onboarding||[]).push([[376],{5791:function(e,n,a){a.d(n,{Z:function(){return g}});var t=a(9307),r=(a(5609),a(4184)),i=a.n(r),s=a(5158),o=a(6974),d=a(2200),c=a(6989),l=a.n(c),m=e=>{let{className:n="nfd-onboarding-layout__base",children:a}=e;const r=(0,o.TH)(),c=document.querySelector(".nfd-onboard-content");return(0,t.useEffect)((()=>{null==c||c.focus({preventScroll:!0}),function(e){let n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"Showing new Onboarding Page";(0,s.speak)(n,"assertive")}(r,"Override"),new class{constructor(e){let n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};this.eventSlug=e,this.eventData=n}send(){l()({url:`${d.bQ}/events`,method:"POST",data:{slug:this.eventSlug,data:this.eventData}}).catch((e=>{console.error(e)}))}}(`${d.Db}-pageview`,{stepID:r.pathname,previousStepID:window.nfdOnboarding.previousStepID}).send(),window.nfdOnboarding.previousStepID=r.pathname}),[r.pathname]),(0,t.createElement)("div",{className:i()("nfd-onboarding-layout",n)},a)};const u=e=>{let{children:n}=e;return(0,t.createElement)("section",{className:"is-contained"},n)};var g=e=>{let{className:n="",children:a,isBgPrimary:r=!1,isCentered:s=!1,isVerticallyCentered:o=!1,isContained:d=!1,isPadded:c=!1,isFadeIn:l=!0}=e;const g=d?u:t.Fragment;return(0,t.createElement)(m,{className:i()("nfd-onboarding-layout__common",n,{"is-layout-fade-in":l},{"is-bg-primary":r},{"is-centered":s},{"is-vertically-centered":o},{"is-padded":c})},(0,t.createElement)(g,null,a))}},1228:function(e,n,a){a.d(n,{Z:function(){return u}});var t=a(9307),r=a(4184),i=a.n(r),s=e=>{let{summary:n,className:a,children:r,isOpen:s=!1}=e;return(0,t.createElement)("details",{className:i()("nfd-onboarding-accordion",a),open:s},(0,t.createElement)("summary",{className:"nfd-onboarding-accordion__summary"},n),(0,t.createElement)("div",{className:"nfd-onboarding-accordion__content"},r))},o=a(1984),d=a(5736),c=a(9685),l=a(6974),m=a(9818),u=()=>{const e=(0,l.TH)(),{currentStep:n}=(0,m.useSelect)((e=>({currentStep:e(c.h).getCurrentStep()})),[e.pathname]);return(0,t.createElement)("div",{className:"nfd-onboarding-overview"},(0,t.createElement)("div",{className:"nfd-onboarding-overview__header"},(0,t.createElement)("div",{className:"nfd-onboarding-overview__header-icon"},(0,t.createElement)(o.Z,{icon:n.Icon,size:64,style:{fill:"var(--nfd-onboarding-primary)"}})),(0,t.createElement)("div",null,(0,t.createElement)("h2",{className:"nfd-onboarding-overview__header-heading"},n.heading),(0,t.createElement)("strong",{className:"nfd-onboarding-overview__header-subheading"},n.subheading))),(0,t.createElement)("br",null),(0,t.createElement)(s,{summary:(0,d.__)("Learn More","wp-module-onboarding")},(0,t.createElement)("p",null,n.description)))}},9376:function(e,n,a){a.r(n);var t=a(9307),r=a(5791),i=a(1228),s=a(9685),o=a(9818);n.default=()=>{const{setIsDrawerOpened:e,setIsSidebarOpened:n}=(0,o.useDispatch)(s.h);return(0,t.useEffect)((()=>{e(!1),n(!1)}),[]),(0,t.createElement)(r.Z,{isCentered:!0,isBgPrimary:!0},(0,t.createElement)(i.Z,null))}}}]);