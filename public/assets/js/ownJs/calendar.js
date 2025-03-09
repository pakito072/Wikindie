$(document).ready(function () {
  const calendarEl = document.getElementById("kt_calendar_app");

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    selectable: true,
    editable: false,
    firstDay: 1,
    events: calendarEvents,

    select: function (info) {
      $("#kt_modal_add_event").modal("show");

      $("#kt_modal_add_event_form")[0].reset();
      $("#eventId").val("");
      $("#kt_calendar_datepicker_start_date").val(info.startStr);
      $("#kt_calendar_datepicker_end_date").val(info.endStr);
    },

    eventClick: function (info) {
      Swal.fire({
        title: "Do you want to delete this event?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, keep it",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: base_url + "deleteEvent/" + info.event.id,
            type: "DELETE",
            data: {
              id: info.event.id,
            },
            success: function () {
              info.event.remove();
              Swal.fire("Deleted!", "Event deleted successfully.", "success");
            },
            error: function () {
              Swal.fire("Failed!", "Failed to delete the event.", "error");
            },
          });
        } else {
          $("#kt_modal_add_event").modal("show");

          $("#eventId").val(info.event.id);
          $("#eventTitle").val(info.event.title);
          $("#eventDescriptionEs").val(info.event.extendedProps.DESCRIPTION_ES);
          $("#eventDescriptionEng").val(
            info.event.extendedProps.DESCRIPTION_ENG
          );
          $("#kt_calendar_datepicker_start_date").val(info.event.startStr);
          $("#kt_calendar_datepicker_end_date").val(info.event.endStr);
        }
      });
    },
  });

  calendar.render();

  $("#kt_modal_add_event_form").on("submit", function (e) {
    e.preventDefault();

    var eventData = {
      PK_ID_EVENT: $("#eventId").val(),
      TITLE: $("#eventTitle").val(),
      DESCRIPTION_ES: $("#eventDescriptionEs").val(),
      DESCRIPTION_ENG: $("#eventDescriptionEng").val(),
      START_DATE: $("#kt_calendar_datepicker_start_date").val(),
      END_DATE: $("#kt_calendar_datepicker_end_date").val(),
    };

    $.ajax({
      url: base_url + "addEvent",
      type: "POST",
      data: eventData,
      success: function (response) {
        if (response.errors) {
          let errorMessages = "";
          for (const [key, value] of Object.entries(response.errors)) {
            errorMessages += `${value}\n`;
          }
          Swal.fire("Validation Error", errorMessages, "error");
        } else {
          $("#kt_modal_add_event").modal("hide");

          calendar.addEvent({
            id: response.id,
            title: eventData.TITLE,
            start: eventData.START_DATE,
            end: eventData.END_DATE,
            DESCRIPTION_ES: eventData.DESCRIPTION_ES,
            DESCRIPTION_ENG: eventData.DESCRIPTION_ENG,
          });

          Swal.fire("Saved!", "Event saved successfully.", "success");
        }
      },
      error: function () {
        Swal.fire("Failed!", "Failed to save the event.", "error");
      },
    });
  });
});
