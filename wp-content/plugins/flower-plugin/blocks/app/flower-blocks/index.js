// import './editor.scss';

const {registerBlockType} = wp.blocks;
const {__} = wp.i18n;
const {
    InspectorControls,
    BlockControls,      //tc of creating of container and ui for the toolbar
    AlignmentToolbar,//tc of creating buttons for alignment of toolbar
    BlockAlignmentToolbar
} = wp.editor; //components-----
const {PanelBody, PanelRow, TextControl, SelectControl} = wp.components;
//
//
// <InspectorControls> помещает нашу панель в sidebar
// <PanelBody> открывает отображение панели в sidebar, тело панели
// <PanelRow> уточняем текстово, что содержит эта панель
// <TextControl> блок с введением текста
// <SelectControl> для выбора

registerBlockType('yasik/flower-recipe', {         //создание блока
    title: __('Author Description', 'flower-plugin'),
    description: __(
        'Provides a super Short description of flower', 'flower-plugin'
    ),
    category: 'common', //formatting, common, layout, widgets, embed
    icon: 'nametag',
    keywords: [
        __('flower', 'flower-plugin'),
        __('description', 'flower-plugin'),
        __('created', 'flower-plugin'),
    ],
    supports: {
        html: false
    },
    attributes: {
        userName: {
            type: 'string',
            source: 'text',
            selector: '.userName-ph'
        },
        surname: {
            type: 'string',
            source: 'text',
            selector: '.surname-ph'
        },
        age: {
            type: 'integer',
            source: 'text',
            selector: '.age-ph'
        },
        gender: {
            type: 'string',
            source: 'text',
            selector: '.gender-ph',
            default: 'none'
        },
        doSpeakEnglish: {
            type: 'string',
            source: 'text',
            selector: '.doSpeakEnglish-ph',
            default: 'no'
        },
        text_alignment: {
            type: 'string'
        },
        block_alignment: {
            type: 'string',
            default: 'wide'
        }
    },
    getEditWrapperProps: ({block_alignment}) => {
        if ('left' === block_alignment || 'right' === block_alignment || 'full' === block_alignment) {
            return {'data-align': block_alignment};
        }
    },
    edit: (props) => {  //display on gutenberg editor, ui
        return [
            <InspectorControls>
                <PanelBody title={__('Basics', 'flower-plugin')}>
                    <PanelRow>
                        <p>{__('Configure', 'flower-plugin')}</p>
                    </PanelRow>
                    <TextControl
                        label={__('Name', 'flower-plugin')}
                        help={__('Input your namePls', 'flower-plugin')}  //инструкция, как использовать этот филд
                        value={props.attributes.userName}
                        onChange={(new_val) => {  //input field
                            props.setAttributes({userName: new_val})
                        }}/>

                    <TextControl
                        label={__('Surname', 'flower-plugin')}
                        help={__('Input your surname, Pls', 'flower-plugin')}
                        value={props.attributes.surname}
                        onChange={(new_val) => {
                            props.setAttributes({surname: new_val})
                        }}/>

                    <TextControl
                        label={__('Age', 'flower-plugin')}
                        help={__('Input your age', 'flower-plugin')}
                        value={props.attributes.age}
                        onChange={(new_val) => {
                            props.setAttributes({age: new_val})
                        }}/>

                    <SelectControl
                        label={__('Gender', 'flower-plugin')}
                        help={__('Choose your gender, plz?', 'flower-plugin')}
                        value={props.attributes.gender}
                        options={[
                            {value: 'Male', label: 'Male'},
                            {value: 'Female', label: 'Female'}
                        ]}
                        onChange={(new_val) => {
                            props.setAttributes({gender: new_val})
                        }
                        }/>

                    <SelectControl
                        label={__('Language', 'flower-plugin')}
                        help={__('Do you speak English?', 'flower-plugin')}
                        value={props.attributes.doSpeakEnglish}
                        options={[
                            {value: 'yes', label: 'yes'},
                            {value: 'no', label: 'no'}
                        ]}
                        onChange={(new_val) => {
                            props.setAttributes({doSpeakEnglish: new_val})
                        }}/>
                </PanelBody></InspectorControls>,

            // собсвенно, сам блок
            <div className={props.className}>
                <BlockControls>
                    <BlockAlignmentToolbar
                        value={props.attributes.block_alignment}
                        onChange={(new_val) => {
                            props.setAttributes({block_alignment: new_val})
                        }}/>
                    <AlignmentToolbar
                        value={props.attributes.text_alignment}
                        onChange={(new_val) => {
                            props.setAttributes({text_alignment: new_val});
                        }}/>
                </BlockControls>
                <ul className="list-unstyled"
                    style={{textAlign: props.attributes.text_alignment}}>
                    <li>
                        <strong>{__('Name: ', 'flower-plugin')}</strong>
                        {props.attributes.userName}
                    </li>
                    <li>
                        <strong>{__('Surname: ', 'flower-plugin')}</strong>
                        <span className={'userName-ph'}>{props.attributes.surname}</span>
                    </li>
                    <li>
                        <strong>{__('Age: ', 'flower-plugin')}</strong>
                        <span className={'surname-ph'}>{props.attributes.age}</span>
                    </li>
                    <li>
                        <strong>{__('Gender: ', 'flower-plugin')}</strong>
                        <span className={'gender-ph'}> {props.attributes.gender}</span>
                    </li>
                    <li>
                        <strong>{__('Speak English: ', 'flower-plugin')}</strong>
                        <span className={'doSpeakEnglish-ph'}>{props.attributes.doSpeakEnglish}</span>
                    </li>
                </ul>
            </div>
        ];
    },
    save: (props) => {  //display content on the frontend
        return (

            <div className={`align${props.attributes.block_alignment}`}>
                <ul className="list-unstyled"
                    style={{textAlign: props.attributes.text_alignment}}>
                    <li>
                        <strong>{__('Name: ', 'flower-plugin')}</strong>
                        {props.attributes.userName}
                    </li>
                    <li>
                        <strong>{__('Surname: ', 'flower-plugin')}</strong>
                        <span className={'userName-ph'}>{props.attributes.surname}</span>
                    </li>
                    <li>
                        <strong>{__('Age: ', 'flower-plugin')}</strong>
                        <span className={'surname-ph'}>{props.attributes.age}</span>
                    </li>
                    <li>
                        <strong>{__('Gender: ', 'flower-plugin')}</strong>
                        <span className={'gender-ph'}> {props.attributes.gender}</span>
                    </li>
                    <li>
                        <strong>{__('Speak English: ', 'flower-plugin')}</strong>
                        <span className={'doSpeakEnglish-ph'}>{props.attributes.doSpeakEnglish}</span>
                    </li>
                </ul>
            </div>
        );
    }
});
