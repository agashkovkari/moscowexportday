function goToAnchor() {
  const anchors = document.querySelectorAll("a[href*='#']");

  if (anchors.length < 1) return;

  anchors.forEach((curAnchor) => {
    const anchor = curAnchor;

    anchor.addEventListener('click', (e) => {
      const blockID = anchor.getAttribute('href').substring(1);
      const blockPos = window.pageYOffset + document.getElementById(blockID).getBoundingClientRect().top;
      const offsetPosition = blockPos - 50;

      e.preventDefault();

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth',
      });
    });
  });
}

function eventsSwitcher() {
  const eventsSwitchers = document.querySelectorAll('.events-switcher');

  if (eventsSwitchers.length < 1) return;

  eventsSwitchers.forEach((eventsSwitcher) => {
    const eventsTabs = eventsSwitcher.querySelector('.events-tabs');
    const eventsBtns = eventsTabs.querySelectorAll('.events-btn');
    const eventsBlocksContainer = eventsSwitcher.querySelector('.events-blocks');
    const eventsBlocks = eventsBlocksContainer.querySelectorAll('.events-block');

    eventsBtns.forEach((eventsBtn) => {
      eventsBtn.addEventListener('click', () => {
        const target = eventsBtn.dataset.target;

        eventsBtns.forEach((eventsBtn) => {
          eventsBtn.classList.remove('bg-primary', 'text-white');
        });

        eventsBtn.classList.add('bg-primary', 'text-white');

        eventsBlocks.forEach((eventsBlock) => {
          if (eventsBlock.dataset.switcherBlock === target) {
            eventsBlock.classList.remove('hidden');
          } else {
            eventsBlock.classList.add('hidden');
          }
        });
      });
    });
  });
}

function switcherLink() {
  const switcherLinks = document.querySelectorAll('.switcher-link');

  if (switcherLinks.length < 1) return;

  switcherLinks.forEach((switcherLink) => {
    switcherLink.addEventListener('click', () => {
      if (!switcherLink.nextElementSibling) return;
      switcherLink.nextElementSibling.classList.toggle('hidden');
    });
  });
}

function isEmail(emailAddress) {
  var pattern = new RegExp(
    /^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
  );
  return pattern.test(emailAddress);
}

function formEvents() {
  const currentForm = document.querySelector('.request-form');

  if (!currentForm) return;

  const fields = currentForm.querySelectorAll('input[type="text"], input[type="email"], textarea');
  const submits = currentForm.querySelectorAll('input[type="submit"]');

  for (let field of fields) {
    field.addEventListener('blur', () => {
      if (field.value && field.value !== field.defaultValue) {
        field.classList.remove('error');
      }

      if (field.classList.contains('email')) {
        if (field.value && field.value !== field.defaultValue && !isEmail(field.value)) {
          field.classList.add('error');
        }
      }
    });
  }

  for (let submit of submits) {
    submit.addEventListener('click', (e) => {
      for (let field of fields) {
        if (field.classList.contains('required')) {
          if (!field.value || field.value == field.defaultValue || field.value === ' ' || field.value === '-') {
            field.classList.add('error');
          } else {
            field.classList.remove('error');
          }
        }

        if (field.classList.contains('email')) {
          if (field.value && field.value !== field.defaultValue && !isEmail(field.value)) {
            field.classList.add('error');
          } else if (field.classList.contains('required')) {
            if (!field.value || field.value == field.defaultValue) {
              field.classList.add('error');
            } else {
              field.classList.remove('error');
            }
          } else {
            field.classList.remove('error');
          }
        }

        if (field.classList.contains('inn')) {
          if (
            field.value &&
            field.value !== field.defaultValue &&
            field.value.length !== 10 &&
            field.value.length !== 12
          ) {
            field.classList.add('error');
          } else if (field.classList.contains('required')) {
            if (!field.value || field.value == field.defaultValue) {
              field.classList.add('error');
            } else {
              field.classList.remove('error');
            }
          } else {
            field.classList.remove('error');
          }
        }
      }

      const errors = currentForm.querySelectorAll('.error').length;

      if (errors >= 1) {
        e.preventDefault();
        return;
      }

      const lid = currentForm.getAttribute('landing-id');
      let config = {};

      config = {
        fields: {
          Contact: currentForm.querySelector('.fio'),
          MobilePhone: currentForm.querySelector('.phone'),
          Email: currentForm.querySelector('.email'),
          InpVidSLID: currentForm.querySelector('.field__product'),
          UF_CRM_PODKATEGORIYA: currentForm.querySelector('.field__subcat'),
          UF_CRM_WEBSITE: currentForm.querySelector('.field__href'),
          BpmHref: currentForm.querySelector('.field__href'),
          LeadType: currentForm.querySelector('.field__leadtype'),
        },
        landingId: lid,
        serviceUrl: 'https://cp.moscow-export.com/rest/773/v3lauws2elvtk0ko/TerraSoft.SaveWebFormObjectData.json',
        redirectUrl: '',
      };

      function createObject() {
        landing.createObjectFromLanding(config);
      }

      createObject();

      currentForm.parentElement.querySelector('.form-success').classList.remove('hidden');
      currentForm.classList.add('hidden');
    });
  }
}

document.addEventListener('DOMContentLoaded', () => {
  goToAnchor();
  eventsSwitcher();
  switcherLink();
  formEvents();

  $('input.phone').mask('+7 (999) 999-99-99', {
    selectOnFocus: true,
    completed: function () {
      this.css('color', 'rgb(0,0,0)');
    },
  });
});
