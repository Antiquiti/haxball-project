$(document).ready(function()
{
    overlay("#settings-ib", ".settings-background");
    overlay("#notifications-ib", ".notifications-background");
    overlay("#add-friend-ib", ".add-friend-background");
    overlay("#f-notifications-ib", ".friends-notifications-background")
});

function overlay(button, element)
{
    $(button).click(function()
    {
        $(element).css("display", "flex");
        $(element).fadeTo(250, 1);
    });

    $(element).click(function(event)
    {
        if (event.target != this)
        {
            return;
        }

        $(this).fadeTo(250, 0, function()
        {
            $(this).css("display", "none");
        });
    });
}