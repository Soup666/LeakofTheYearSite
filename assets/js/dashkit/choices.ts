import * as Choices from "choices.js";

const toggles = document.querySelectorAll('[data-choices]');

let decodeHtmlSpecialChars = (str) => {
    str = str.replace(/&#(\d+);/g, function(match, dec) {
        return String.fromCharCode(dec);
    });

    str = str.replace(/&quot;/g, '"')
        .replace(/&amp;/g, '&')
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&apos;/g, "'")
    ;

    return str;
}

// @ts-ignore
export function initChoices(toggleElement, optionOverrides = {}): Choices
{
    let defaultOptions = {
        allowHTML: false,
        classNames: {
            containerInner: toggleElement.className,
            input: 'form-control',
            inputCloned: 'form-control-sm',
            listDropdown: 'dropdown-menu',
            itemChoice: 'dropdown-item',
            activeState: 'show',
            selectedState: 'active',
        },
        shouldSort: false,
        callbackOnCreateTemplates: function (template) {
            return {
                choice: (options, data) => {
                    const classNames = options.classNames;

                    const classes = `${classNames.item} ${classNames.itemChoice} ${
                        data.disabled ? classNames.itemDisabled : classNames.itemSelectable
                    }`;

                    const disabled = data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable';
                    const role = data.groupId > 0 ? 'role="treeitem"' : 'role="option"';
                    const selectText = this.config.itemSelectText;

                    let label = '';

                    if (data.customProperties && data.customProperties.avatarSrc) {
                        label = `<div class="avatar avatar-xs me-3">`
                            + `    <img class="avatar-img rounded-circle" src="${data.customProperties.avatarSrc}" alt="${data.label}" >`
                            + `</div> `;
                    }

                    label += data.label;

                    return template(`<div class="${classes}" data-select-text="${selectText}" data-choice ${disabled} data-id="${data.id}" data-value="${data.value}" ${role}>${label}</div>`);
                },
            };
        },
    };

    if (toggleElement.multiple) {
        defaultOptions['removeItemButton'] = true;
    }

    const options = {
        ...optionOverrides,
        ...defaultOptions,
    };

    // @ts-ignore
    return toggleElement.choices = new Choices(toggleElement, options);
}

toggles.forEach((toggle: HTMLSelectElement|HTMLInputElement) => {
    // Decode from PHP's htmlspecialchars
    let dataChoices = toggle.getAttribute("data-choices");

    if (dataChoices) {
        dataChoices = decodeHtmlSpecialChars(dataChoices);
    }

    const elementOptions = dataChoices ? JSON.parse(dataChoices) : {};

    initChoices(toggle, elementOptions);
});

// Make available globally
(<any>window).Choices = Choices;