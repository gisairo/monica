<?php

/**
 * ⚠️ Edition not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakt hittades ej',
    'people_list_number_kids' => '1 kid|:count kids',
    'people_list_last_updated' => 'Senast kontakt:',
    'people_list_number_reminders' => '1 påminnelse<unk>:count påminnelser',
    'people_list_blank_title' => 'Du har ingen på ditt konto ännu',
    'people_list_blank_cta' => 'Lägg till en person',
    'people_list_sort' => 'Sortera',
    'people_list_stats' => '1 kontakt<unk> :count kontakter',
    'people_list_firstnameAZ' => 'Sortera efter förnamn A → Ö',
    'people_list_firstnameZA' => 'Sortera efter förnamn Ö → A',
    'people_list_lastnameAZ' => 'Sortera efter efternamn A → Ö',
    'people_list_lastnameZA' => 'Sortera efter efternamn Ö → A',
    'people_list_lastactivitydateNewtoOld' => 'Sortera efter senaste aktivitetsdatum nyaste till äldsta',
    'people_list_lastactivitydateOldtoNew' => 'Sortera efter senaste aktivitetsdatum äldsta till nyaste',
    'people_list_filter_tag' => 'Visar alla kontakter taggade med',
    'people_list_clear_filter' => 'Töm filter',
    'people_list_contacts_per_tags' => '1 kontakt<unk> :count kontakter',
    'people_list_show_dead' => 'Visa avlidna personer (:count)',
    'people_list_hide_dead' => 'Dölj avlidna personer (:count)',
    'people_search' => 'Sök efter kontakt...',
    'people_search_no_results' => 'Inga resultat hittades',
    'people_search_next' => 'Nästa',
    'people_search_prev' => 'Föregående',
    'people_search_rows_per_page' => 'Rader per sida:',
    'people_search_of' => 'av',
    'people_search_page' => 'Sida',
    'people_search_all' => 'Alla',
    'people_add_new' => 'Lägg till ny person',
    'people_list_account_usage' => 'Din kontoanvändning: :current/:limit kontakter',
    'people_list_account_upgrade_title' => 'Uppgradera ditt konto för att låsa upp det till dess fulla potential.',
    'people_list_account_upgrade_cta' => 'Uppgradera nu',
    'people_list_untagged' => 'Visa ej taggade kontakter',
    'people_list_filter_untag' => 'Showing all untagged contacts',

    // people add
    'people_add_title' => 'Lägg till en ny person',
    'people_add_missing' => 'Ingen person hittade Lägg till en ny nu',
    'people_add_firstname' => 'Förnamn',
    'people_add_middlename' => 'Mellannamn (valfritt)',
    'people_add_lastname' => 'Efternamn (valfritt)',
    'people_add_nickname' => 'Smeknamn (valfritt)',
    'people_add_cta' => 'Lägg till',
    'people_save_and_add_another_cta' => 'Skicka in och lägg till någon annan',
    'people_add_success' => ':name har skapats',
    'people_add_gender' => 'Kön',
    'people_delete_success' => 'Kontakten har tagits bort',
    'people_delete_message' => 'Ta bort kontakt',
    'people_delete_confirmation' => 'Är du säker på att du vill ta bort denna kontakt? Borttagning är permanent.',
    'people_add_birthday_reminder' => 'Önska födelsedag till :name',
    'people_add_birthday_reminder_deceased' => 'På detta datum, skulle  :name,  ha firat sin födelsedag',
    'people_add_import' => 'Vill du <a href=":url">importera dina kontakter</a>?',
    'people_edit_email_error' => 'Det finns redan en kontakt på ditt konto med denna e-postadress. Välj en annan.',
    'people_export' => 'Exportera som vCard',
    'people_add_reminder_for_birthday' => 'Skapa en årlig påminnelse för födelsedagen',

    // show
    'section_contact_information' => 'Kontaktuppgifter',
    'section_personal_activities' => 'Aktiviteter',
    'section_personal_reminders' => 'Påminnelser',
    'section_personal_tasks' => 'Uppgifter',
    'section_personal_gifts' => 'Gåvor',
    'section_personal_notes' => 'Anteckningar',

    // archived contacts
    'list_link_to_active_contacts' => 'Du visar arkiverade kontakter. Se <a href=":url">listan över aktiva kontakter</a> istället.',
    'list_link_to_archived_contacts' => 'Lista över arkiverade kontakter',

    // Header
    'me' => 'Detta är du',
    'edit_contact_information' => 'Redigera kontaktinformation',
    'contact_archive' => 'Arkivera kontakt',
    'contact_unarchive' => 'Avarkivera kontakt',
    'contact_archive_help' => 'Arkiverade kontakter visas inte på kontaktlistan, men visas fortfarande i sökresultaten.',
    'call_button' => 'Logga ett samtal',
    'set_favorite' => 'Favoritkontakter placeras högst upp i kontaktlistan',

    // Stay in touch
    'stay_in_touch' => 'Håll kontakten',
    'stay_in_touch_frequency' => 'Håll kontakten varje dag Håll kontakten var {count} dag',
    'stay_in_touch_invalid' => 'Frekvensen måste vara större än 0.',
    'stay_in_touch_premium' => 'Du måste uppgradera ditt konto för att använda denna funktion',
    'stay_in_touch_modal_title' => 'Håll kontakten',
    'stay_in_touch_modal_desc' => 'Vi kan påminna dig via e-post om att hålla kontakten med {firstname} med ett regelbundet intervall.',
    'stay_in_touch_modal_label' => 'Skicka ett mail med var... {count} dag<unk> Skicka ett mail med var... {count} dagar',

    // Calls
    'modal_call_title' => 'Registrera samtal',
    'modal_call_comment' => 'Vad pratade ni om? (valfritt)',
    'modal_call_exact_date' => 'Samtalet skedde den',
    'modal_call_who_called' => 'Vem ringde?',
    'modal_call_emotion' => 'Vill du logga hur du kände dig under detta samtal? (valfritt)',
    'calls_add_success' => 'Samtalet har sparats.',
    'call_delete_confirmation' => 'Är du säker på att du vill ta bort detta samtal?',
    'call_delete_success' => 'Samtalet har tagits bort',
    'call_title' => 'Telefonsamtal',
    'call_empty_comment' => 'Inga detaljer',
    'call_blank_title' => 'Håll koll på de telefonsamtal du gjort med {name}',
    'call_blank_desc' => 'Du ringde {name}',
    'call_you_called' => 'Du ringde',
    'call_he_called' => '{name} ringde',
    'call_emotions' => 'Känslor:',

    // Conversation
    'conversation_blank' => 'Spela in samtal du har med :name på sociala medier, SMS, ...',
    'conversation_delete_link' => 'Ta bort konversationen',
    'conversation_edit_title' => 'Redigera konversation',
    'conversation_edit_delete' => 'Är du säker på att du vill ta bort denna konversation? Borttagning är permanent.',
    'conversation_add_success' => 'Samtalet har lagts till.',
    'conversation_edit_success' => 'Samtalet har uppdaterats.',
    'conversation_delete_success' => 'Konversationen har tagits bort.',
    'conversation_add_title' => 'Spela in en ny konversation',
    'conversation_add_when' => 'När hade du den här konversationen?',
    'conversation_add_who_wrote' => 'Vem har sagt detta meddelande?',
    'conversation_add_how' => 'Hur kommunicerade du?',
    'conversation_add_you' => 'Du',
    'conversation_add_content' => 'Skriv ner vad som sades',
    'conversation_add_what_was_said' => 'Vad sade du?',
    'conversation_add_another' => 'Lägg till ett annat meddelande',
    'conversation_add_error' => 'Du måste lägga till minst ett meddelande.',
    'conversation_list_table_messages' => 'Meddelanden',
    'conversation_list_table_content' => 'Partial content (last message)',
    'conversation_list_title' => 'Konversationer',
    'conversation_list_cta' => 'Logga konversation',

    // age - birthday
    'birthdate_not_set' => 'Födelsedatum är inte inställt',
    'age_approximate_in_years' => 'runt :age år gammal',
    'age_exact_in_years' => ':age år gammal',
    'age_exact_birthdate' => 'född :date',

    // Last called
    'last_called' => 'Last called: :date',
    'last_called_empty' => 'Last called: unknown',
    'last_activity_date' => 'Senaste aktiviteten tillsammans: :date',
    'last_activity_date_empty' => 'Senaste aktiviteten tillsammans: okänd',

    // additional information
    'information_edit_success' => 'Profilen har uppdaterats',
    'information_edit_title' => 'Redigera :name\'s personliga information',
    'information_edit_max_size' => 'Max :size Kb.',
    'information_edit_max_size2' => 'Max {size} Kb.',
    'information_edit_firstname' => 'First name',
    'information_edit_lastname' => 'Last name (Optional)',
    'information_edit_description' => 'Description (Optional)',
    'information_edit_description_help' => 'Used on the contact list to add some context, if necessary.',
    'information_edit_unknown' => 'I do not know this person’s age',
    'information_edit_probably' => 'This person is probably...',
    'information_edit_not_year' => 'I know the day and month of the birthdate of this person, but not the year…',
    'information_edit_exact' => 'I know the exact birthdate of this person...',
    'information_edit_birthdate_label' => 'Birthdate',
    'information_no_work_defined' => 'No work information defined',
    'information_work_at' => 'at :company',
    'work_add_cta' => 'Update work information',
    'work_edit_success' => 'Work information have been updated with success',
    'work_edit_title' => 'Update :name’s job information',
    'work_edit_job' => 'Job title (optional)',
    'work_edit_company' => 'Company (optional)',
    'work_information' => 'Work information',

    // food preferences
    'food_preferences_add_success' => 'Food preferences have been saved',
    'food_preferences_edit_description' => 'Perhaps :firstname or someone in the :family’s family has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferences_edit_description_no_last_name' => 'Perhaps :firstname has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferences_edit_title' => 'Indicate food preferences',
    'food_preferences_edit_cta' => 'Save food preferences',
    'food_preferences_title' => 'Food preferences',
    'food_preferences_cta' => 'Add food preferences',

    // reminders
    'reminders_blank_title' => 'Is there something you want to be reminded of about :name?',
    'reminders_blank_add_activity' => 'Add a reminder',
    'reminders_add_title' => 'What would you like to be reminded of about :name?',
    'reminders_add_description' => 'Please remind me to...',
    'reminders_add_next_time' => 'When is the next time you would like to be reminded about this?',
    'reminders_add_once' => 'Remind me about this just once',
    'reminders_add_recurrent' => 'Remind me about this every',
    'reminders_add_starting_from' => 'starting from the date specified above',
    'reminders_add_cta' => 'Add reminder',
    'reminders_edit_update_cta' => 'Update reminder',
    'reminders_add_error_custom_text' => 'You need to indicate a text for this reminder',
    'reminders_create_success' => 'The reminder has been added successfully',
    'reminders_delete_success' => 'The reminder has been deleted successfully',
    'reminders_update_success' => 'The reminder has been updated successfully',
    'reminders_add_optional_comment' => 'Optional comment',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'every week|every :number weeks',
    'reminder_frequency_month' => 'every month|every :number months',
    'reminder_frequency_year' => 'every year|every :number year',
    'reminder_frequency_one_time' => 'on :date',
    'reminders_delete_confirmation' => 'Are you sure you want to delete this reminder?',
    'reminders_delete_cta' => 'Radera',
    'reminders_next_expected_date' => 'på',
    'reminders_cta' => 'Lägg till en påminnelse',
    'reminders_description' => 'Vi kommer att skicka ett mail för var och en av påminnelserna nedan. Påminnelser skickas varje morgon då händelser kommer att hända. Påminnelser som läggs till automatiskt för födelsedatum kan inte raderas. Om du vill ändra dessa datum, redigera födelsedatum för kontakterna.',
    'reminders_one_time' => 'En gång',
    'reminders_type_week' => 'vecka',
    'reminders_type_month' => 'månad',
    'reminders_type_year' => 'år',
    'reminders_birthday' => 'Birthday of :name',
    'reminders_free_plan_warning' => 'Du är på den fria planen. Inga e-postmeddelanden skickas på denna plan. För att få dina påminnelser via e-post, uppgradera ditt konto.',

    // relationships
    'relationship_form_add' => 'Lägg till ett nytt förhållande',
    'relationship_form_edit' => 'Redigera ett befintligt förhållande',
    'relationship_form_is_with' => 'Denna person är...',
    'relationship_form_is_with_name' => ':name är...',
    'relationship_form_add_choice' => 'Vem är relationen med?',
    'relationship_form_create_contact' => 'Lägg till en ny person',
    'relationship_form_associate_contact' => 'En befintlig kontakt',
    'relationship_form_associate_dropdown' => 'Sök och välj en befintlig kontakt i menyn nedan',
    'relationship_form_associate_dropdown_placeholder' => 'Sök och välj en befintlig kontakt',
    'relationship_form_also_create_contact' => 'Skapa en kontaktpost för denna person.',
    'relationship_form_add_description' => 'Detta kommer att låta dig behandla denna person som alla andra kontakter.',
    'relationship_form_add_no_existing_contact' => 'Du har inga kontakter som kan vara relaterade till :name just nu.',
    'relationship_delete_confirmation' => 'Är du säker på att du vill ta bort detta förhållande? Borttagning är permanent.',
    'relationship_unlink_confirmation' => 'Är du säker på att du vill ta bort detta förhållande? Denna person kommer inte att tas bort – bara förhållandet mellan de två.',
    'relationship_form_add_success' => 'Relationen har fastställts framgångsrikt.',
    'relationship_form_deletion_success' => 'Relationen har tagits bort.',

    // tasks
    'tasks_title' => 'Uppgifter',
    'tasks_blank_title' => 'Du har inga uppgifter ännu.',
    'tasks_form_title' => 'Titel',
    'tasks_form_description' => 'Beskrivning (valfritt)',
    'tasks_add_task' => 'Lägg till en uppgift',
    'tasks_delete_success' => 'Uppgiften har tagits bort',
    'tasks_complete_success' => 'Uppgiften har ändrat status',

    // activities
    'activity_title' => 'Aktiviteter',
    'activity_type_category_simple_activities' => 'Enkla aktiviteter',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Mat',
    'activity_type_category_cultural_activities' => 'Kulturella aktiviteter',
    'activity_type_just_hung_out' => 'hängde precis ut',
    'activity_type_watched_movie_at_home' => 'såg en film hemma',
    'activity_type_talked_at_home' => 'precis pratat hemma',
    'activity_type_did_sport_activities_together' => 'spelade en sport tillsammans',
    'activity_type_ate_at_his_place' => 'åt hemma hos sig',
    'activity_type_went_bar' => 'gick till en bar',
    'activity_type_ate_at_home' => 'åt hemma',
    'activity_type_picnicked' => 'utflykt',
    'activity_type_ate_restaurant' => 'åt på en restaurang',
    'activity_type_went_theater' => 'gick till teatern',
    'activity_type_went_concert' => 'gick till en konsert',
    'activity_type_went_play' => 'gick till en pjäs',
    'activity_type_went_museum' => 'went to the museum',
    'activities_add_activity' => 'Add activity',
    'activities_add_more_details' => 'Add more details',
    'activities_add_emotions' => 'Add emotions',
    'activities_add_category' => 'Indicate a category',
    'activities_add_participants_cta' => 'Add participants',
    'activities_item_information' => ':Activity. Happened on :date',
    'activities_add_title' => 'What did you do with {name}?',
    'activities_summary' => 'Describe what you did',
    'activities_add_pick_activity' => '(Optional) Would you like to categorize this activity? You don’t have to, but it will give you statistics later on',
    'activities_add_date_occured' => 'The activity happened on...',
    'activities_add_participants' => 'Who, apart from {name}, participated in this activity? (optional)',
    'activities_add_emotions_title' => 'Do you want to log how you felt during this activity? (optional)',
    'activities_blank_title' => 'Keep track of what you’ve done with {name} in the past, and what you’ve talked about',
    'activities_blank_add_activity' => 'Add an activity',
    'activities_add_success' => 'The activity has been added successfully',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'The activity has been updated successfully',
    'activities_delete_success' => 'The activity has been deleted successfully',
    'activities_who_was_involved' => 'Who was involved?',
    'activities_activity' => 'Activity Category',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',
    'activities_list_participants' => 'Participants:',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Category:',

    // notes
    'notes_create_success' => 'The note has been created successfully',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_cta' => 'Add note',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Are you sure you want to delete this note? Deletion is permanent',

    // gifts
    'gifts_title' => 'Gifts',
    'gifts_add_success' => 'The gift has been added successfully',
    'gifts_delete_success' => 'The gift has been deleted successfully',
    'gifts_delete_confirmation' => 'Are you sure you want to delete this gift?',
    'gifts_add_gift' => 'Add a gift',
    'gifts_link' => 'Link',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Delete',
    'gifts_add_title' => 'Gift management for :name',
    'gifts_add_gift_idea' => 'Gift idea',
    'gifts_add_gift_already_offered' => 'Gift offered',
    'gifts_add_gift_received' => 'Gåva mottagen',
    'gifts_add_gift_title' => 'Vad är denna gåva?',
    'gifts_add_gift_name' => 'Gåvans namn',
    'gifts_add_link' => 'Länk till webbsidan (valfritt)',
    'gifts_add_value' => 'Värde (valfritt)',
    'gifts_add_comment' => 'Kommentar (valfritt)',
    'gifts_add_recipient' => 'Mottagare (valfritt)',
    'gifts_add_recipient_field' => 'Mottagare',
    'gifts_add_photo' => 'Foto (valfritt)',
    'gifts_add_photo_title' => 'Lägg till ett foto för denna gåva',
    'gifts_add_someone' => 'Denna gåva är till för någon i {name} familj i synnerhet',
    'gifts_delete_title' => 'Ta bort en gåva',
    'gifts_ideas' => 'Gåva idéer',
    'gifts_offered' => 'Erbjudna gåvor',
    'gifts_offered_as_an_idea' => 'Markera som en idé',
    'gifts_received' => 'Gåvor mottagna',
    'gifts_view_comment' => 'Visa kommentar',
    'gifts_mark_offered' => 'Markera som erbjuden',
    'gifts_update_success' => 'Gåvan har uppdaterats',

    // debts
    'debt_delete_confirmation' => 'Är du säker på att du vill ta bort denna skuld?',
    'debt_delete_success' => 'Skulden har tagits bort',
    'debt_add_success' => 'Skulden har lagts till',
    'debt_title' => 'Skulder',
    'debt_add_cta' => 'Lägg till skuld',
    'debt_you_owe' => 'Du är skyldig :amount',
    'debt_they_owe' => ':name är skyldig dig :amount',
    'debt_add_title' => 'Skuldhantering',
    'debt_add_you_owe' => 'Du är skyldig :name',
    'debt_add_they_owe' => ':name är skyldig dig',
    'debt_add_amount' => 'summan av',
    'debt_add_reason' => 'av följande skäl (valfritt)',
    'debt_add_add_cta' => 'Lägg till skuld',
    'debt_edit_update_cta' => 'Uppdatera skuld',
    'debt_edit_success' => 'Skulden har uppdaterats',
    'debts_blank_title' => 'Hantera skulder du är skyldig :name eller :name är du skyldig',

    // tags
    'tag_edit' => 'Redigera tagg',
    'tag_add' => 'Lägg till taggar',
    'tag_add_search' => 'Lägg till eller sök taggar',
    'tag_no_tags' => 'Inga taggar ännu',

    // Introductions
    'introductions_sidebar_title' => 'Hur du träffades',
    'introductions_blank_cta' => 'Ange hur du träffade :name',
    'introductions_title_edit' => 'Hur träffade du :name?',
    'introductions_additional_info' => 'Förklara hur och var du träffades',
    'introductions_edit_met_through' => 'Har någon introducerat dig till den här personen?',
    'introductions_no_met_through' => 'Ingen',
    'introductions_first_met_date' => 'Datum som ni träffades',
    'introductions_no_first_met_date' => 'Jag vet inte vilket datum vi träffades',
    'introductions_first_met_date_known' => 'Detta är det datum vi möttes',
    'introductions_add_reminder' => 'Lägg till en påminnelse för att fira detta möte på årsdagen denna händelse hände',
    'introductions_update_success' => 'Du har uppdaterat informationen om hur du träffade den här personen',
    'introductions_met_through' => 'Met through <a href=":url">:name</a>',
    'introductions_met_date' => 'Met on :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this person as deceased',
    'deceased_know_date' => 'I know the date this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Deceased',
    'deceased_date_label' => 'Deceased date',
    'deceased_label_with_date' => 'Deceased on :date',
    'deceased_age' => 'Age at death',

    // Contact information
    'contact_info_title' => 'Contact information',
    'contact_info_form_content' => 'Content',
    'contact_info_form_contact_type' => 'Contact type',
    'contact_info_form_personalize' => 'Personalize',
    'contact_info_address' => 'Lives in',

    // Addresses
    'contact_address_title' => 'Addresses',
    'contact_address_form_name' => 'Label (optional)',
    'contact_address_form_street' => 'Street (optional)',
    'contact_address_form_city' => 'City (optional)',
    'contact_address_form_province' => 'Province (optional)',
    'contact_address_form_postal_code' => 'Postal code (optional)',
    'contact_address_form_country' => 'Country (optional)',
    'contact_address_form_latitude' => 'Latitude (numbers only) (optional)',
    'contact_address_form_longitude' => 'Longitude (numbers only) (optional)',

    // Pets
    'pets_kind' => 'Kind of pet',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'The pet has been successfully added',
    'pets_update_success' => 'The pet has been updated',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Pets',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Bird',
    'pets_cat' => 'Cat',
    'pets_dog' => 'Dog',
    'pets_fish' => 'Fish',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, ...',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Berättelse (valfritt)',
    'life_event_create_date' => 'Du behöver inte ange en månad eller en dag - bara året är obligatoriskt.',
    'life_event_create_default_description' => 'Lägg till information om vad du vet',
    'life_event_create_add_yearly_reminder' => 'Lägg till en årlig påminnelse för denna händelse',
    'life_event_create_success' => 'Livshändelsen har lagts till',
    'life_event_delete_title' => 'Ta bort en livshändelse',
    'life_event_delete_description' => 'Är du säker på att du vill ta bort denna livshändelse? Borttagning är permanent.',
    'life_event_delete_success' => 'Livshändelsen har tagits bort',
    'life_event_date_it_happened' => 'Datum det hände',
    'life_event_category_work_education' => 'Arbete & utbildning',
    'life_event_category_family_relationships' => 'Familj & relationer',
    'life_event_category_home_living' => 'Hem & Boende',
    'life_event_category_health_wellness' => 'Hälsa & välmående',
    'life_event_category_travel_experiences' => 'Resor & upplevelser',
    'life_event_sentence_new_job' => 'Började på ett nytt jobb',
    'life_event_sentence_retirement' => 'Pensionerad',
    'life_event_sentence_new_school' => 'Började på skola',
    'life_event_sentence_study_abroad' => 'Studerade utomlands',
    'life_event_sentence_volunteer_work' => 'Började volontärarbeta',
    'life_event_sentence_published_book_or_paper' => 'Publicerat ett papper',
    'life_event_sentence_military_service' => 'Värnplikt',
    'life_event_sentence_new_relationship' => 'Började ett förhållande',
    'life_event_sentence_engagement' => 'Förlovade mig',
    'life_event_sentence_marriage' => 'Gifte mig',
    'life_event_sentence_anniversary' => 'Årsdag',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Fick barn',
    'life_event_sentence_new_family_member' => 'Lade till en familjemedlem',
    'life_event_sentence_new_pet' => 'Fick ett husdjur',
    'life_event_sentence_end_of_relationship' => 'Avslutade ett förhållande',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Flyttade',
    'life_event_sentence_bought_a_home' => 'Köpte ett hem',
    'life_event_sentence_home_improvement' => 'Förbättrade och renoverade hemmet',
    'life_event_sentence_holidays' => 'Åkte på semester',
    'life_event_sentence_new_vehicle' => 'Fick ett nytt fordon',
    'life_event_sentence_new_roommate' => 'Fick en rumskompis',
    'life_event_sentence_overcame_an_illness' => 'Overcame an illness',
    'life_event_sentence_quit_a_habit' => 'Avslutade en vana',
    'life_event_sentence_new_eating_habits' => 'Började nya matvanor',
    'life_event_sentence_weight_loss' => '"Gå ner i vikt"',
    'life_event_sentence_wear_glass_or_contact' => 'Började bära glasögon eller kontaktlinser',
    'life_event_sentence_broken_bone' => 'Bröt ett ben',
    'life_event_sentence_removed_braces' => 'Tog bort tandställning',
    'life_event_sentence_surgery' => 'Hade operation',
    'life_event_sentence_dentist' => 'Gick till tandläkaren',
    'life_event_sentence_new_sport' => 'Började med sport',
    'life_event_sentence_new_hobby' => 'Började med en hobby',
    'life_event_sentence_new_instrument' => 'Lärde mig ett nytt instrument',
    'life_event_sentence_new_language' => 'Lärde sig ett nytt språk',
    'life_event_sentence_tattoo_or_piercing' => 'Fick en tatuering eller piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Fick en prestation eller belöning',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Talade för första gången',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Documents',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document...',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_title' => 'Photos',
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_current_profile_pic' => 'Current profile picture',
    'photo_make_profile_pic' => 'Make profile picture',
    'photo_delete' => 'Delete photo',
    'photo_next' => 'Next photo',
    'photo_previous' => 'Previous photo',

    // Avatars
    'avatar_change_title' => 'Change your avatar',
    'avatar_question' => 'Which avatar would you like to use?',
    'avatar_default_avatar' => 'The default avatar',
    'avatar_adorable_avatar' => 'The Adorable avatar',
    'avatar_gravatar' => 'The Gravatar associated with the email address of this person. <a href="https://gravatar.com/">Gravatar</a> is a global system that lets users associate email addresses with photos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];
