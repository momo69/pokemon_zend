<?php
return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'SerializerAdapterManager' => 'Zend\\Serializer\\AdapterPluginManagerFactory',
      'Zend\\Cache\\PatternPluginManager' => 'Zend\\Cache\\Service\\PatternPluginManagerFactory',
      'Zend\\Cache\\Storage\\AdapterPluginManager' => 'Zend\\Cache\\Service\\StorageAdapterPluginManagerFactory',
      'Zend\\Cache\\Storage\\PluginManager' => 'Zend\\Cache\\Service\\StoragePluginManagerFactory',
      'Zend\\Paginator\\AdapterPluginManager' => 'Zend\\Paginator\\AdapterPluginManagerFactory',
      'Zend\\Paginator\\ScrollingStylePluginManager' => 'Zend\\Paginator\\ScrollingStylePluginManagerFactory',
      'DependencyInjector' => 'Zend\\ServiceManager\\Di\\DiFactory',
      'DiAbstractServiceFactory' => 'Zend\\ServiceManager\\Di\\DiAbstractServiceFactoryFactory',
      'DiServiceInitializer' => 'Zend\\ServiceManager\\Di\\DiServiceInitializerFactory',
      'DiStrictAbstractServiceFactory' => 'Zend\\ServiceManager\\Di\\DiStrictAbstractServiceFactoryFactory',
      'Zend\\Session\\Config\\ConfigInterface' => 'Zend\\Session\\Service\\SessionConfigFactory',
      'Zend\\Session\\ManagerInterface' => 'Zend\\Session\\Service\\SessionManagerFactory',
      'Zend\\Session\\Storage\\StorageInterface' => 'Zend\\Session\\Service\\StorageFactory',
      'Zend\\Mvc\\I18n\\Translator' => 'Zend\\Mvc\\I18n\\TranslatorFactory',
      'ConsoleAdapter' => 'Zend\\Mvc\\Console\\Service\\ConsoleAdapterFactory',
      'ConsoleExceptionStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleExceptionStrategyFactory',
      'ConsoleRouteNotFoundStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleRouteNotFoundStrategyFactory',
      'ConsoleRouter' => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterFactory',
      'ConsoleViewManager' => 'Zend\\Mvc\\Console\\Service\\ConsoleViewManagerFactory',
      'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\Service\\DefaultRenderingStrategyFactory',
      'Zend\\Mvc\\Console\\View\\Renderer' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Log\\Logger' => 'Zend\\Log\\LoggerServiceFactory',
      'LogFilterManager' => 'Zend\\Log\\FilterPluginManagerFactory',
      'LogFormatterManager' => 'Zend\\Log\\FormatterPluginManagerFactory',
      'LogProcessorManager' => 'Zend\\Log\\ProcessorPluginManagerFactory',
      'LogWriterManager' => 'Zend\\Log\\WriterPluginManagerFactory',
      'FormAnnotationBuilder' => 'Zend\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Zend\\Form\\FormElementManagerFactory',
      'Zend\\Db\\Adapter\\AdapterInterface' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
    ),
    'abstract_factories' => 
    array (
      0 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
      1 => 'Zend\\Session\\Service\\ContainerAbstractServiceFactory',
      2 => 'Zend\\Log\\LoggerAbstractServiceFactory',
      3 => 'Zend\\Form\\FormAbstractServiceFactory',
      4 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
    ),
    'aliases' => 
    array (
      'Di' => 'DependencyInjector',
      'Zend\\Di\\LocatorInterface' => 'DependencyInjector',
      'Zend\\Session\\SessionManager' => 'Zend\\Session\\ManagerInterface',
      'MvcTranslator' => 'Zend\\Mvc\\I18n\\Translator',
      'console' => 'ConsoleAdapter',
      'Console' => 'ConsoleAdapter',
      'ConsoleDefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy',
      'ConsoleRenderer' => 'Zend\\Mvc\\Console\\View\\Renderer',
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'FormElementManager',
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterInterface',
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
    ),
    'delegators' => 
    array (
      'HttpRouter' => 
      array (
        0 => 'Zend\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory',
      ),
      'Zend\\Router\\Http\\TreeRouteStack' => 
      array (
        0 => 'Zend\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory',
      ),
      'ControllerManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ControllerManagerDelegatorFactory',
      ),
      'Request' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleRequestDelegatorFactory',
      ),
      'Response' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseDelegatorFactory',
      ),
      'Zend\\Router\\RouteStackInterface' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterDelegatorFactory',
      ),
      'Zend\\Mvc\\SendResponseListener' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseSenderDelegatorFactory',
      ),
      'ViewHelperManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleViewHelperManagerDelegatorFactory',
      ),
      'ViewManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ViewManagerDelegatorFactory',
      ),
    ),
  ),
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'prg' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'PostRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'postRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'postredirectget' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'Zend\\Mvc\\Controller\\Plugin\\PostRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'Identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'Zend\\Mvc\\Controller\\Plugin\\Identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'flashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'Zend\\Mvc\\Controller\\Plugin\\FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'fileprg' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filepostredirectget' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'Zend\\Mvc\\Controller\\Plugin\\FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'CreateConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createconsolenotfoundmodel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'Zend\\Mvc\\Controller\\Plugin\\CreateConsoleNotFoundModel::class' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
    ),
    'factories' => 
    array (
      'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\Identity\\Identity' => 'Zend\\Mvc\\Plugin\\Identity\\IdentityFactory',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'console' => 
  array (
    'router' => 
    array (
      'routes' => 
      array (
      ),
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'form' => 'Zend\\Form\\View\\Helper\\Form',
      'Form' => 'Zend\\Form\\View\\Helper\\Form',
      'formbutton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Zend\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Zend\\Form\\View\\Helper\\FormText',
      'form_text' => 'Zend\\Form\\View\\Helper\\FormText',
      'formText' => 'Zend\\Form\\View\\Helper\\FormText',
      'FormText' => 'Zend\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
    ),
    'factories' => 
    array (
      'Zend\\Form\\View\\Helper\\Form' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormText' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/application[/:action]',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'pokemon_home' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/pokedex/pokemon',
          'defaults' => 
          array (
            'controller' => 'Pokemon\\Controller\\Pokemon',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'paged' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/page/:page',
              'constraints' => 
              array (
                'page' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Pokemon\\Controller\\Pokemon',
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'pokemon_add' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/pokedex/pokemon/add',
          'defaults' => 
          array (
            'controller' => 'Pokemon\\Controller\\Pokemon',
            'action' => 'add',
          ),
        ),
        'priority' => 1,
      ),
      'pokemon_edit' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/pokemon/edit/:pokemonId',
          'constraints' => 
          array (
            'pokemonId' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Pokemon\\Controller\\Pokemon',
            'action' => 'edit',
          ),
        ),
      ),
      'pokemon_delete' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/pokemon/delete/:pokemonId',
          'constraints' => 
          array (
            'pokemonId' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Pokemon\\Controller\\Pokemon',
            'action' => 'delete',
          ),
        ),
      ),
      'pokemon_show' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/pokemon/:pokemonName',
          'contraints' => 
          array (
            'pokemonName' => '[a-zA-Z0-9-]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Pokemon\\Controller\\Pokemon',
            'action' => 'show',
          ),
        ),
      ),
      'type_home' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/pokedex/type',
          'defaults' => 
          array (
            'controller' => 'Type\\Controller\\Type',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'paged' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/page/:page',
              'constraints' => 
              array (
                'page' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'controller' => 'Type\\Controller\\Type',
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'type_add' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/pokedex/type/add',
          'defaults' => 
          array (
            'controller' => 'Type\\Controller\\Type',
            'action' => 'add',
          ),
        ),
        'priority' => 1,
      ),
      'type_edit' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/type/edit/:typeId',
          'constraints' => 
          array (
            'typeId' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Type\\Controller\\Type',
            'action' => 'edit',
          ),
        ),
      ),
      'type_delete' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/type/delete/:typeId',
          'constraints' => 
          array (
            'typeId' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Type\\Controller\\Type',
            'action' => 'delete',
          ),
        ),
      ),
      'type_show' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/pokedex/type/:typeName',
          'contraints' => 
          array (
            'typeName' => '[a-zA-Z0-9-]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Type\\Controller\\Type',
            'action' => 'show',
          ),
        ),
      ),
    ),
  ),
  'view_manager' => 
  array (
    'template_path_stack' => 
    array (
      'zenddevelopertools' => '/Applications/MAMP/htdocs/pokemon_zend/vendor/zendframework/zend-developer-tools/config/../view',
      0 => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view',
      1 => '/Applications/MAMP/htdocs/pokemon_zend/module/Pokemon/config/../view',
      2 => '/Applications/MAMP/htdocs/pokemon_zend/module/Type/config/../view',
    ),
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
    ),
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view/layout/layout.phtml',
      'application/index/index' => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view/application/index/index.phtml',
      'error/404' => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view/error/404.phtml',
      'error/index' => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view/error/index.phtml',
      'partial/pagination' => '/Applications/MAMP/htdocs/pokemon_zend/module/Application/config/../view/partial/pagination.phtml',
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'Application\\Controller\\IndexController' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Pokemon\\Controller\\Pokemon' => 'Pokemon\\Controller\\PokemonControllerFactory',
      'Type\\Controller\\Type' => 'Type\\Controller\\TypeControllerFactory',
    ),
  ),
  'db' => 
  array (
    'driver' => 'Pdo',
    'dsn' => 'mysql:dbname=pokedex_zend;host=localhost',
    'username' => 'root',
    'password' => 'root',
    'driver_options' => 
    array (
      1002 => 'SET NAMES \'UTF8\'',
    ),
  ),
);