<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
       <link rel="stylesheet" href="../css/bootstrap-main.css">
       <link rel="stylesheet" href="../css/main.css">
       <link rel="stylesheet" href="../css/now-ui-kit.css">
       <link rel="stylesheet" href="../css/tailwind.css" >
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&
       display=swap">
       <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Commands | ChillBot</title>
</head>
<body class="bg-gray-800 font-sans leading-normal tracking-normal">
       <nav class="navbar navbar-expand-lg bg-transparent">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                   <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                   <a class="nav-link" href="update.php">Updates</a>
                            </li>
                            <li class="nav-item">
                                   <a class="nav-link" href="staff.php">Staff</a>
                            </li>
                            <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chill.lv</a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="https://discord.gg/qFUZHeC">Discord</a>
                                   <a class="dropdown-item" href="https://chill.lv/forums/">Forum</a>
                                   </div>
                            </li>           
                     </ul>
              </div>
       </nav>
<style>
p {
       color: white;
}
</style>
<div class="bg-gray-800 font-sans leading-normal tracking-normal" id="commands">
       <div class="commands-block">
           <p class="heading text-center" style="font-size: 42px; padding: 20px 20px;">Command list for the ChillBot</p>
           <p class="subtitle text-left">Default prefix for the bot - <code>%</code><br />Optional parameters - <code>()</code><br />Required parameters - <code>&lt; &gt;</code></p>

              <div class='commands-block__header'>
                     <h3>Name</h3>
                     <h3>Usage</h3>
                     <h3>Description</h3>
                     <h3>Aliases</h3>
              </div>

              <h3 class='commands-block__title'>Animal Commands</h3>
              <div class='commands-block-table animal'>
                     <div class='commands-block-table__rows cat'>
                            <p class="row name">cat</p>
                            <p class="row usage">%cat</p>
                            <p class="row desc">Sends a random cat image from the web</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='cat'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows dog'>
                            <p class="row name">dog</p>
                            <p class="row usage">%dog</p>
                            <p class="row desc">Sends a random dog image from the web</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='dog'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows fox'>
                            <p class="row name">fox</p>
                            <p class="row usage">%fox</p>
                            <p class="row desc">Sends a random fox image from the web</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='fox'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows panda'>
                            <p class="row name">panda</p>
                            <p class="row usage">%panda</p>
                            <p class="row desc">Sends a random panda image from the web</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='panda'><img class="commandImage" src="">Not done yet, come back later!</p>
              </div>

              <h3 class='commands-block__title'>Fun Commands</h3>
              <div class='commands-block-table fun'>
                     <div class='commands-block-table__rows 8ball'>
                            <p class="row name">8ball</p>
                            <p class="row usage">%8ball</p>
                            <p class="row desc">Sends a magical response to a random question</p>
                            <p class="row aliase">8b</p>
                     </div>
                     <p class='row-dropdown' id='8ball'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows boomerrate'>
                            <p class="row name">boomerrate</p>
                            <p class="row usage">%boomerrate &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical percent of how boomer is the specified person</p>
                            <p class="row aliase">howboomer</p>
                     </div>
                     <p class='row-dropdown' id='boomerrate'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows dumbrate'>
                            <p class="row name">dumbrate</p>
                            <p class="row usage">%dumbrate &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical percent of how dumb is the specified person</p>
                            <p class="row aliase">howdumb</p>
                     </div>
                     <p class='row-dropdown' id='dumbrate'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows emoji'>
                            <p class="row name">emoji</p>
                            <p class="row usage">%emoji &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a random text-like emoji</p>
                            <p class="row aliase">moji</p>
                     </div>
                     <p class='row-dropdown' id='emoji'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows gayrate'>
                            <p class="row name">gayrate</p>
                            <p class="row usage">%gayrate &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical percent of how gay is the specified person</p>
                            <p class="row aliase">howgay</p>
                     </div>
                     <p class='row-dropdown' id='gayrate'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows howbig'>
                            <p class="row name">howbig</p>
                            <p class="row usage">%howbig &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical penis size of the user specified</p>
                            <p class="row aliase">penis</p>
                     </div>
                     <p class='row-dropdown' id='howbig'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows nerdrate'>
                            <p class="row name">nerdrate</p>
                            <p class="row usage">%nerdrate &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical percent of how nerdy is the specified person</p>
                            <p class="row aliase">hownerd</p>
                     </div>
                     <p class='row-dropdown' id='nerdrate'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows roast'>
                            <p class="row name">roast</p>
                            <p class="row usage">%roast</p>
                            <p class="row desc">Sends a random insult from the web</p>
                            <p class="row aliase">insult</p>
                     </div>
                     <p class='row-dropdown' id='roast'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows simprate'>
                            <p class="row name">simprate</p>
                            <p class="row usage">%simprate &lt;@User/Username/User#&gt;</p>
                            <p class="row desc">Sends a magical percent of how simpy is the specified person</p>
                            <p class="row aliase">howsimp</p>
                     </div>
                     <p class='row-dropdown' id='simprate'><img class="commandImage" src="">Not done yet, come back later!</p>
              </div>

       <!-- 
              <h3 class='commands-block__title'>Giveaway Commands</h3>
              <div class='commands-block-table giveaway'>
                     <div class='commands-block-table__rows gend'>
                            <p class="row name">end-giveaway</p>
                            <p class="row usage">%end-giveaway &lt;Giveaway Message ID&gt;</p>
                            <p class="row desc">Ends the specified giveaway</p>
                            <p class="row aliase">gend, endg, end-g</p>
                     </div>
                     <p class='row-dropdown' id='gend'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ghelp'>
                            <p class="row name">giveaway-help</p>
                            <p class="row usage">%giveaway-help</p>
                            <p class="row desc">Shows a giveaway help message</p>
                            <p class="row aliase">ghelp</p>
                     </div>
                     <p class='row-dropdown' id='ghelp'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows rrg'>
                            <p class="row name">reroll-giveaway</p>
                            <p class="row usage">%reroll-giveaway</p>
                            <p class="row desc">Rerolls the specified giveaway</p>
                            <p class="row aliase">grr, rrg, rr-g</p>
                     </div>
                     <p class='row-dropdown' id='rrg'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows gstart'>
                            <p class="row name">start-giveaway</p>
                            <p class="row usage">%start-giveaway &lt;#Channel&gt; &lt;duration (Time letters allowed)&gt; &lt;winners&gt; &lt;prize&gt;</p>
                            <p class="row desc">Starts a giveaway</p>
                            <p class="row aliase">gstart, startg, start-g</p>
                     </div>
                     <p class='row-dropdown' id='gstart'><img class="commandImage" src="">Not done yet, come back later!</p>
              </div> 
       -->

              <h3 class='commands-block__title'>Logging commands</h3>
              <div class='commands-block-table misc'>
                     <div class='commands-block-table__rows banlog'>
                            <p class="row name">ban-log</p>
                            <p class="row usage">%ban-log help</p>
                            <p class="row desc">Sets the mentioned channel as ban logs</p>
                            <p class="row aliase">banlogs</p>
                     </div>
                     <p class='row-dropdown' id='banlog' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows channellog'>
                            <p class="row name">channel-log</p>
                            <p class="row usage">%channel-log help</p>
                            <p class="row desc">Sets the mentioned channel as channel logs</p>
                            <p class="row aliase">channellogs, chlogs</p>
                     </div>
                     <p class='row-dropdown' id='channellog' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows emlogs'>
                            <p class="row name">emoji-log</p>
                            <p class="row usage">%emoji-log help</p>
                            <p class="row desc">Sets the mentioned channel as emoji logs</p>
                            <p class="row aliase">emojilogs, elogs</p>
                     </div>
                     <p class='row-dropdown' id='emlogs'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows memberlogs'>
                            <p class="row name">member-log</p>
                            <p class="row usage">%member-log help</p>
                            <p class="row desc">Sets the mentioned channel as member logs</p>
                            <p class="row aliase">memberlogs</p>
                     </div>
                     <p class='row-dropdown' id='memberlogs'><img class="commandImage" src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows messagelogs'>
                            <p class="row name">message-log</p>
                            <p class="row usage">%message-log help</p>
                            <p class="row desc">Sets the mentioned channel as message logs</p>
                            <p class="row aliase">messagelogs, msglogs</p>
                     </div>
                     <p class='row-dropdown' id='messagelogs' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows nicklogs'>
                            <p class="row name">nick-log</p>
                            <p class="row usage">%nick-log help</p>
                            <p class="row desc">Sets the mentioned channel as nick logs</p>
                            <p class="row aliase">nicklogs</p>
                     </div>
                     <p class='row-dropdown' id='nicklogs' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows rolelogs'>
                            <p class="row name">role-log</p>
                            <p class="row usage">%role-log help</p>
                            <p class="row desc">Sets the mentioned channel as role logs</p>
                            <p class="row aliase">rolelogs</p>
                     </div>
                     <p class='row-dropdown' id='rolelogs' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ticketlogs'>
                            <p class="row name">ticket-log</p>
                            <p class="row usage">%ticket-log help</p>
                            <p class="row desc">Sets the mentioned channel as ticket logs</p>
                            <p class="row aliase">ticketlogs</p>
                     </div>
                     <p class='row-dropdown' id='ticketlogs' src="">Not done yet, come back later!</p>
              </div>

              <h3 class='commands-block__title'>Miscellaneous commands</h3>
              <div class='commands-block-table misc'>
                     <div class='commands-block-table__rows about'>
                            <p class="row name">about</p>
                            <p class="row usage">%about</p>
                            <p class="row desc">Displays information about the bot</p>
                            <p class="row aliase">botinfo</p>
                     </div>
                     <p class='row-dropdown' id='about' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows avatar'>
                            <p class="row name">avatar</p>
                            <p class="row usage">%avatar &lt;@User&gt;</p>
                            <p class="row desc">Sends the specified user, avatar in chat</p>
                            <p class="row aliase">pfp, image</p>
                     </div>
                     <p class='row-dropdown' id='avatar' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows covid'>
                            <p class="row name">covid</p>
                            <p class="row usage">%covid &lt;Country in english&gt;</p>
                            <p class="row desc">Displays the curent covid stats of the specified country, if none is specified, displays global stats</p>
                            <p class="row aliase">covid19, corona, covidstats</p>
                     </div>
                     <p class='row-dropdown' id='covid' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows dice'>
                            <p class="row name">dice</p>
                            <p class="row usage">%dice</p>
                            <p class="row desc">Rolls the dice</p>
                            <p class="row aliase">rollthedice</p>
                     </div>
                     <p class='row-dropdown' id='dice' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows invite'>
                            <p class="row name">invite</p>
                            <p class="row usage">%invite</p>
                            <p class="row desc">Displays the bot invite link</p>
                            <p class="row aliase">botinvite</p>
                     </div>
                     <p class='row-dropdown' id='invite' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ping'>
                            <p class="row name">ping</p>
                            <p class="row usage">%ping</p>
                            <p class="row desc">Displays the bot's ping</p>
                            <p class="row aliase">pingo</p>
                     </div>
                     <p class='row-dropdown' id='ping' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows serverinfo'>
                            <p class="row name">serverinfo</p>
                            <p class="row usage">%serverinfo</p>
                            <p class="row desc">Fetches and displays information about the discord server</p>
                            <p class="row aliase">si</p>
                     </div>
                     <p class='row-dropdown' id='serverinfo' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows steam'>
                            <p class="row name">steam</p>
                            <p class="row usage">%steam &lt;Steam link end/Steam name&gt;</p>
                            <p class="row desc">Fetches and displays information about the specified steam member</p>
                            <p class="row aliase">steaminfo, steam-userinfo</p>
                     </div>
                     <p class='row-dropdown' id='steam' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows uptime'>
                            <p class="row name">uptime</p>
                            <p class="row usage">%uptime</p>
                            <p class="row desc">Fetches and displays the bot's uptime</p>
                            <p class="row aliase">up</p>
                     </div>
                     <p class='row-dropdown' id='uptime' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows urban'>
                            <p class="row name">urban</p>
                            <p class="row usage">%urban &lt;search/random&gt; (query to search)</p>
                            <p class="row desc">Gets an article with the specified title from the urban dictionary</p>
                            <p class="row aliase">urban-dictionary</p>
                     </div>
                     <p class='row-dropdown' id='urban' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows userinfo'>
                            <p class="row name">userinfo</p>
                            <p class="row usage">%userinfo</p>
                            <p class="row desc">Fetches and displays information about the specified member</p>
                            <p class="row aliase">ui, whois</p>
                     </div>
                     <p class='row-dropdown' id='userinfo' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows weather'>
                            <p class="row name">weather</p>
                            <p class="row usage">%weather &lt;Location in english&gt;</p>
                            <p class="row desc">Fetches and displays the weather at the specified location</p>
                            <p class="row aliase"></p>
                     </div>
                     <p class='row-dropdown' id='weather' src="">Not done yet, come back later!</p>
              </div>

              <h3 class='commands-block__title'>Moderation commands</h3>
              <div class='commands-block-table mod'>
                     <div class='commands-block-table__rows addrole'>
                            <p class="row name">addrole</p>
                            <p class="row usage">%addrole &lt;@User&gt; &lt;@Role/Role ID/Role name&gt;</p>
                            <p class="row desc">Adds the specified role to the specified user</p>
                            <p class="row aliase">roleadd</p>
                     </div>
                     <p class='row-dropdown' id='addrole' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows autoreact'>
                            <p class="row name">autoreact</p>
                            <p class="row usage">%autoreact &lt;#Channel&gt;</p>
                            <p class="row desc">Automatically reacts to all messages in the specified channel (Useful for suggestion channels)</p>
                            <p class="row aliase">autoreaction</p>
                     </div>
                     <p class='row-dropdown' id='autoreact' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows autorole'>
                            <p class="row name">autorole</p>
                            <p class="row usage">%autorole &lt;#Channel&gt;</p>
                            <p class="row desc">Automatically gives a role upon a user joining the server</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='autoreact' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ban'>
                            <p class="row name">ban</p>
                            <p class="row usage">%ban &lt;@User&gt; (Time) (Reason)</p>
                            <p class="row desc">Bans the specified user, deleting messages whitin the specified time in days.</p>
                            <p class="row aliase">pban</p>
                     </div>
                     <p class='row-dropdown' id='ban' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows invites'>
                            <p class="row name">invites</p>
                            <p class="row usage">%invites &lt;@User&gt;</p>
                            <p class="row desc">Fetches and displays active invite count for the specified user</p>
                            <p class="row aliase">invited</p>
                     </div>
                     <p class='row-dropdown' id='invites' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows kick'>
                            <p class="row name">kick</p>
                            <p class="row usage">%kick &lt;@User&gt; (Reason)</p>
                            <p class="row desc">Kicks the specified user</p>
                            <p class="row aliase">pkick</p>
                     </div>
                     <p class='row-dropdown' id='kick' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows nickname'>
                            <p class="row name">nickname</p>
                            <p class="row usage">%nickname &lt;@User&gt; &lt;New name&gt;</p>
                            <p class="row desc">Changes the guild nickname, for the specified user</p>
                            <p class="row aliase">nick</p>
                     </div>
                     <p class='row-dropdown' id='nickname' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows poll'>
                            <p class="row name">poll</p>
                            <p class="row usage">%poll &lt;Question&gt;</p>
                            <p class="row desc">Makes a poll with the specified question</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='poll' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows prefix'>
                            <p class="row name">prefix</p>
                            <p class="row usage">%prefix &lt;New prefix&gt;</p>
                            <p class="row desc">Changes the prefix for the guild (Requires ADMINISTRATOR permission)</p>
                            <p class="row aliase">setprefix, prefixset</p>
                     </div>
                     <p class='row-dropdown' id='prefix' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows purge'>
                            <p class="row name">purge</p>
                            <p class="row usage">%purge &lt;A number from 1-100&gt;</p>
                            <p class="row desc">Bulkdeletes the specified amount of messages<</p>
                            <p class="row aliase">clear, p</p>
                     </div>
                     <p class='row-dropdown' id='purge' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows removerole'>
                            <p class="row name">removerole</p>
                            <p class="row usage">%removerole &lt;@User&gt; &lt;@Role/Role ID/Role name&gt;</p>
                            <p class="row desc">Removes the specified role from the specified user</p>
                            <p class="row aliase">delrole</p>
                     </div>
                     <p class='row-dropdown' id='removerole' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows say'>
                            <p class="row name">say</p>
                            <p class="row usage">%say (#Channel) &lt;Message&gt;</p>
                            <p class="row desc">Sends the specified message in specified channel</p>
                            <p class="row aliase">announce</p>
                     </div>
                     <p class='row-dropdown' id='say' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows say2'>
                            <p class="row name">say2</p>
                            <p class="row usage">%say2 (#Channel) &lt;Message&gt;</p>
                            <p class="row desc">Sends the specified message in specified channel in an embed</p>
                            <p class="row aliase">announce2</p>
                     </div>
                     <p class='row-dropdown' id='say2' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows setting'>
                            <p class="row name">setting</p>
                            <p class="row usage">%setting help</p>
                            <p class="row desc">Sends the info about the setting command (Administrator permission required!)</p>
                            <p class="row aliase">settings</p>
                     </div>
                     <p class='row-dropdown' id='setting' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows slowmode'>
                            <p class="row name">slowmode</p>
                            <p class="row usage">%slowmode (#Channel) &lt;Time in seconds from 0-21600&gt;</p>
                            <p class="row desc">Changes the specified channel's slowmode settings</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='slowmode' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows unban'>
                            <p class="row name">unban</p>
                            <p class="row usage">%unban &lt;User ID&gt; (Reason)</p>
                            <p class="row desc">Unbans the specified user</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='unban' src="">Not done yet, come back later!</p>
              </div>

              <h3 class='commands-block__title'>Music commands</h3>
              <div class='commands-block-table music'>
                     <div class='commands-block-table__rows radio'>
                            <p class="row name">radio</p>
                            <p class="row usage">%radio help</p>
                            <p class="row desc">Plays music, in the channel that you are in, %radio help for more info</p>
                            <p class="row aliase">247</p>
                     </div>
                     <p class='row-dropdown' id='radio' src="">Not done yet, come back later!</p>
              </div>

              <h3 class='commands-block__title'>NSFW commands</h3>
              <div class='commands-block-table nsfw NSFWTable'>
                     <div class='commands-block-table__rows anal'>
                            <p class="row name">anal</p>
                            <p class="row usage">%anal</p>
                            <p class="row desc">Displays a random analhole image</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='anal' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ass'>
                            <p class="row name">ass</p>
                            <p class="row usage">%ass</p>
                            <p class="row desc">Displays a random ass image</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='ass' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows boobs'>
                            <p class="row name">boobs</p>
                            <p class="row usage">%boobs</p>
                            <p class="row desc">Displays a random breast image</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='boobs' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows pussy'>
                            <p class="row name">pussy</p>
                            <p class="row usage">%pussy</p>
                            <p class="row desc">Displays a random vagina image</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='pussy' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows thigh'>
                            <p class="row name">thigh</p>
                            <p class="row usage">%thigh</p>
                            <p class="row desc">Displays a random thigh image</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='thigh' src="">Not done yet, come back later!</p>
              </div>

              
              <h3 class='commands-block__title'>Ticket commands</h3>
              <div class='commands-block-table ticket'>
                     <div class='commands-block-table__rows addToTicket'>
                            <p class="row name">add</p>
                            <p class="row usage">%add &lt;User ID/Name&gt;</p>
                            <p class="row desc">Adds the specified member to the ticket</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='addToTicket' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows closeTicket'>
                            <p class="row name">close</p>
                            <p class="row usage">%close</p>
                            <p class="row desc">Closes the ticket with confirmation questions</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='closeTicket' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows forceclose'>
                            <p class="row name">forceclose</p>
                            <p class="row usage">%forceclose</p>
                            <p class="row desc">Closes the ticket without confirmation questions</p>
                            <p class="row aliase">fc</p>
                     </div>
                     <p class='row-dropdown' id='forceclose' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows newTicket'>
                            <p class="row name">new</p>
                            <p class="row usage">%new (Reason)</p>
                            <p class="row desc">Makes a ticket with the specified reason if it is provided</p>
                            <p class="row aliase">No Aliases</p>
                     </div>
                     <p class='row-dropdown' id='newTicket' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows removeFromTicket'>
                            <p class="row name">remove</p>
                            <p class="row usage">%remove &lt;@User&gt;</p>
                            <p class="row desc">Removes the specified member from the ticket</p>
                            <p class="row aliase">deluser</p>
                     </div>
                     <p class='row-dropdown' id='removeFromTicket' src="">Not done yet, come back later!</p>

                     <div class='commands-block-table__rows ticketSetup'>
                            <p class="row name">setup</p>
                            <p class="row usage">%setup &lt;Support channel name&gt; (Support channel message)</p>
                            <p class="row desc">Setups the guild to be ready for tickets</p>
                            <p class="row aliase">ticket-setup</p>
                     </div>
                     <p class='row-dropdown' id='ticketSetup' src="">Not done yet, come back later!</p>
              <br />
              <br />
       </div>
              <button onclick="topFunction()" class="transition duration-100 ease-in-out bg-gray-700 text-gray-200 hover:bg-gray-600" id="myBtn" title="Scroll to top">To top</button>
       </div>
</div>

       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="../js/now-ui-kit.min.js"></script>
       <script type="text/javascript" src="../js/global.js"></script>
       <script type="text/javascript" src="../js/commands.js"></script>

</body>
</html>
