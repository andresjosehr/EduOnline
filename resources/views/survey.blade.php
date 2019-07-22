@include("header")

        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
        <script src="https://surveyjs.azureedge.net/1.0.79/survey.ko.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.0/ace.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.0/ext-language_tools.js" type="text/javascript" charset="utf-8"></script>
        <!-- Uncomment to enable Select2 <script src="https://unpkg.com/jquery"></script> <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> -->
        <link href="https://surveyjs.azureedge.net/1.0.79/survey-creator.css" type="text/css" rel="stylesheet"/>
        <script src="https://surveyjs.azureedge.net/1.0.79/survey-creator.js"></script>
        {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="./index.css"> --}}


        <div id="surveyContainer">
            <div id="surveyCreatorContainer"></div>
        </div>
        {{-- <script type="text/javascript" src="./customwidget.js"></script> --}}
        {{-- <script type="text/javascript" src="./index.js"></script> --}}




         <script>

          //Create your translation
var deutschStrings = {
    p: {
        isRequired: "Wird benötigt"
    }
};

//Set the your translation to the locale
SurveyCreator
    .localization
    .locales["de"] = deutschStrings;
//Make this locale the current
//SurveyCreator.localization.currentLocale = "de";
//Make french locale active
SurveyCreator.localization.currentLocale = "es";

SurveyCreator
    .StylesManager
    .applyTheme("orange");

var creatorOptions = {};
var creator = new SurveyCreator.SurveyCreator("surveyCreatorContainer", creatorOptions);;


   </script>

