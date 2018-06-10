-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 198.71.225.63:3306
-- Generation Time: May 08, 2018 at 10:10 PM
-- Server version: 5.5.43-37.2-log
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brentapresley_peer_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(11) NOT NULL,
  `choice_description` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `choice_description`) VALUES
(0, 'Ineffective'),
(1, 'Very little of skill completed'),
(2, 'Needs Improvement'),
(3, 'Below average'),
(4, 'Slightly below average'),
(5, 'average'),
(6, 'Slightly above average'),
(7, 'Above average'),
(8, 'good'),
(9, 'Very impressive, almost perfect'),
(10, 'excellent, could not do better');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `survey_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `feedback_given` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`survey_id`, `category_id`, `feedback_given`) VALUES
(40, 1, 'He did well in writing code and showing what he did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;He could improve on quite a few things.  Completing the code would be one of them. And just general improvements would also be good.'),
(40, 2, 'He participates when necessary and is a general help all around. It is usually a great help.&#13;&#10;&#13;&#10;He doesn&#39;t join calls and doesn&#39;t really do all that much when we are in a group and it shows sometimes.'),
(40, 3, ' He is a good coder and he can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;He doesn&#39;t really do all that much when we are in a group and it shows sometimes. He doesn&#39;t do any of the code.'),
(40, 4, ' He acts kind of respectfully and makes smart choices for the type of person he is and it is always a treat.&#13;&#10;&#13;&#10;He also jokes around and insults others in a joking manner that is quite rude to people&#39;s feelings.'),
(40, 5, 'He is a very creative person and shares that with the group and it helps ease the project that we are doing.&#13;&#10;&#13;&#10;&#13;&#10;His creativity sometimes gets out of control and he is a bit insane sometimes when it comes to ideas.'),
(40, 6, ' He has a laptop which is good for him because it shows that he can work on the fo and do stuff by his lonesome. &#13;&#10;&#13;&#10;I don&#39;t actually have anything for him to improve upon in this category. He is good in this area.'),
(41, 1, 'He did well in writing code and showing what he did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;He could improve on quite a few things.  Completing the code would be one of them. And just general improvements would also be good.'),
(41, 2, 'He participates when necessary and is a general help all around. It is usually a great help.&#13;&#10;&#13;&#10;He doesn&#39;t join calls and doesn&#39;t really do all that much when we are in a group and it shows sometimes.'),
(41, 3, ' He is a good coder and he can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;He doesn&#39;t really do all that much when we are in a group and it shows sometimes. He doesn&#39;t do any of the code.'),
(41, 4, ' He acts kind of respectfully and makes smart choices for the type of person he is and it is always a treat.&#13;&#10;&#13;&#10;He also jokes around and insults others in a joking manner that is quite rude to people&#39;s feelings.'),
(41, 5, 'He is a very creative person and shares that with the group and it helps ease the project that we are doing.&#13;&#10;&#13;&#10;&#13;&#10;His creativity sometimes gets out of control and he is a bit insane sometimes when it comes to ideas.'),
(41, 6, ' He has a laptop which is good for him because it shows that he can work on the fo and do stuff by his lonesome. &#13;&#10;&#13;&#10;I don&#39;t actually have anything for him to improve upon in this category. He is good in this area.'),
(42, 1, 'He did well in writing code and showing what he did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;He could improve on quite a few things.  Completing the code would be one of them. And just general improvements would also be good.'),
(42, 2, 'He participates when necessary and is a general help all around. It is usually a great help.&#13;&#10;&#13;&#10;He doesn&#39;t join calls and doesn&#39;t really do all that much when we are in a group and it shows sometimes.'),
(42, 3, ' He is a good coder and he can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;He doesn&#39;t really do all that much when we are in a group and it shows sometimes. He doesn&#39;t do any of the code.'),
(42, 4, ' He acts kind of respectfully and makes smart choices for the type of person he is and it is always a treat.&#13;&#10;&#13;&#10;He also jokes around and insults others in a joking manner that is quite rude to people&#39;s feelings.'),
(42, 5, 'He is a very creative person and shares that with the group and it helps ease the project that we are doing.&#13;&#10;&#13;&#10;&#13;&#10;His creativity sometimes gets out of control and he is a bit insane sometimes when it comes to ideas.'),
(42, 6, ' He has a laptop which is good for him because it shows that he can work on the fo and do stuff by his lonesome. &#13;&#10;&#13;&#10;I don&#39;t actually have anything for him to improve upon in this category. He is good in this area.'),
(43, 1, 'He did well in writing code and showing what he did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;I don&#39;t really see anything that he could improve upon in our team in the time frame we have.'),
(43, 2, 'He participates and is a general help all around. It is usually a great help to me as Nick doesn&#39;t do much.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that he could improve upon in our team in the time frame we have.'),
(43, 3, ' He is a good coder and he can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that he could improve upon in our team in the time frame we have.'),
(43, 4, ' He acts kind of respectfully and makes smart choices for the type of person he is and it is always a treat. He is a one if a kind person.&#13;&#10;&#13;&#10;I don&#39;t really see anything that he could improve upon in our team in the time frame we have.'),
(43, 5, 'He is a very creative person and shares that with the group and it helps ease the project that we are doing. He is always helpful.&#13;&#10;&#13;&#10;I don&#39;t really see anything that he could improve upon in our team in the time frame we have.'),
(43, 6, 'He has a great grasp on technology and can help others with it as well because he is a nice person.&#13;&#10;&#13;&#10;I don&#39;t actually have anything for him to improve upon in this category. He is good in this area.'),
(44, 1, 'I did well in writing code and showing what I did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon other than learning more code so I can help more.'),
(44, 2, 'I participate and do most of the work. Asher helps as well and it&#39;s usually a great help to me as Nick doesn&#39;t do much.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(44, 3, 'I am a good coder and can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(44, 4, 'I act respectfully and make smart choices for the team and I help the others out as  well as that&#39;s the kind of person I am.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(44, 5, 'I am a very creative person and shares that with the group and it helps ease the project that we are doing. &#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(44, 6, 'I have a great grasp on technology and can help others with it as well because I am a nice person. It is quite easy for me.&#13;&#10;&#13;&#10;I don&#39;t actually have anything for myself to improve upon in this category. I is good in this area.'),
(45, 1, 'I did well in writing code and showing what I did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon other than learning more code so I can help more.'),
(45, 2, 'I participate and do most of the work. Asher helps as well and it&#39;s usually a great help to me as Nick doesn&#39;t do much.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(45, 3, 'I am a good coder and can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(45, 4, 'I act respectfully and make smart choices for the team and I help the others out as  well as that&#39;s the kind of person I am.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(45, 5, 'I am a very creative person and shares that with the group and it helps ease the project that we are doing. &#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(45, 6, 'I have a great grasp on technology and can help others with it as well because I am a nice person. It is quite easy for me.&#13;&#10;&#13;&#10;I don&#39;t actually have anything for myself to improve upon in this category. I is good in this area.'),
(46, 1, 'I did well in writing code and showing what I did to said code. It was useful having a person who knew what they where doing.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon other than learning more code so I can help more.'),
(46, 2, 'I participate and do most of the work. Asher helps as well and it&#39;s usually a great help to me as Nick doesn&#39;t do much.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(46, 3, 'I am a good coder and can show it well and some what clearly. It helps sometimes, but not in all ways.&#13;&#10;&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(46, 4, 'I act respectfully and make smart choices for the team and I help the others out as  well as that&#39;s the kind of person I am.&#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(46, 5, 'I am a very creative person and shares that with the group and it helps ease the project that we are doing. &#13;&#10;&#13;&#10;I don&#39;t really see anything that I could improve upon in our team in the time frame we have.'),
(46, 6, 'I have a great grasp on technology and can help others with it as well because I am a nice person. It is quite easy for me.&#13;&#10;&#13;&#10;I don&#39;t actually have anything for myself to improve upon in this category. I is good in this area.'),
(47, 1, ' I think I&#39;ve done pretty well overall in this class. The actual development work has been pretty easy, so I don&#39;t think there&#39;s a whole lot to say about the quality of my code, or my involvement on the Mary&#39;s Toys web page. I didn&#39;t really go the extra mile, but the site functions as the tasks/stories require.'),
(47, 2, ' Despite the majority of my group&#39;s out-of-class interaction being on slack, I feel like I&#39;ve done a pretty good job at explaining and answering questions through text. My speech could definitely use some work. For a tech school IT student, I feel like I&#39;m about average. For the world at large, I&#39;m probably far below. I need to focus on making my explanations more concise and digestible, as well as vary my vocabulary a bit more. Regarding the client communication, I wasn&#39;t really aware of that aspect of the class, and during SCRUM training I did not ask the client anything despite wanting to.'),
(47, 3, '  I feel like I&#39;ve expressed my respect for my team members very well. When I made it clear that I prefer doing the coding more than the wireframe diagrams, I made sure to let the team know I would still be willing to rotate tasks. I try to be approachable. I haven&#39;t applied much criticism, constructive or otherwise, to my team. This has been working out so far but could potentially be an issue if I&#39;m hesitant to point out an important mistake in the future or something of the sort. I feel I would accept criticism as well, but there hasn&#39;t been much of that either. The one time a group decision conflicted with mine was when we were choosing to record the big list of tasks and stories we did last Monday. I make an incorrect assessment of what Brent wanted, and ended up being wrong. In hindsight, I should have listened more closely to my group&#39;s reasoning. I am very proud of my responses to issues Lexi has been having, and I generally at least acknowledge questions said in my other class&#39;s slack channels. The best way to retain information is to relay it to someone else.'),
(47, 4, '  On one hand, I am proactive in expressing when I work on things and little updates like that, but on the other, I have not tried schedule any meetings myself. Once we have meetings I see myself doing better, it would feel bad if I let my team down. I have made sure I do my fair share on each assignment, and that both CAD&#39;s group and UX&#39;s group are my top priorities regarding school work. It only makes sense, their grades are somewhat tied up in my performance. I am usually the first person to point out my own mistakes, and did so with the miscreation of sprint 2 and my forgetfulness when assigning story points in sprint 3. I expressed that I would make an effort to not make those mistakes again.'),
(47, 5, '  I think I am better at understanding different points of view than actually integrating them in to my own life. The latter is definitely more difficult, and I will argue every possible aspect of something I can before I change my mind. I&#39;m not as open as I once was, but I put &#34;slightly above average&#34; because acknowledgement is the first step towards change.'),
(47, 6, '  I can&#39;t say using Visual Studio 2017 is the optimal IDE for web development, but I do use its GIT integration and am enjoying Source Tree enough to give it a chance to replace my other ways of source control. I also use discord to share screens with Lexi (and soon hopefully Aaron), and that helped us both understand GitBash much better while we were learning it. I have not personally sought any new tools to help our project.'),
(48, 1, ' The quality of his code has been great. Nothing superb going the extra mile like going in and making some js function really modular or setting up classes for CSS down the line, but that would be going the extra mile and I know he has other classes. The same applies to the general design of the page, and the wire frames he&#39;s been doing. Very simple and understandable. The only time he&#39;s done less work than anybody else was because the group didn&#39;t assign tasks proportionally, and the wire frame ended up being easier than usual.'),
(48, 2, '  I don&#39;t think any of the group asked the SCRUM trainer any requirement questions, and we&#39;re not aware of any other type of client communication available yet. His online communication is very professional, and always lets the rest of the group know if he&#39;ll be gone and when he expects to get stuff done. His speech I rated as slightly above average because he doesn&#39;t do much talking in general, but what he does do is concise and professional.'),
(48, 3, '  Very cooperative, was very willing to accommodate different ways of entering the user tasks when we got new information about them. Doesn&#39;t do much documentation when he does code, but we agreed as a group we didn&#39;t need to comment very simple things. Shows a lot of respect for the rest of the group in general. Since the group has been on the same page for the majority of the time, criticism hasn&#39;t really occurred. I&#39;ll reserve my judgement on that. When Lexi was having problems with Jira and BitBucket he was immediately helpful through slack.'),
(48, 4, ' Our group has not had any out-of-class meetings (which we&#39;re changing this week), so I&#39;ll grade this first option based on how frequently he communicates on slack, which is often. He&#39;s not always the one to initiate a conversation, but he makes sure to contribute if it involves him. He makes sure that if he knows he&#39;ll be preoccupied, like he was during one weekend, he gets his work done ahead of time. Once when explaining something to Lexi he realized he mis-communicated an explanation, apologized, and reiterated. Very proactive at calling his own mistakes out, and making corrections.'),
(48, 5, ' Seems willing to understand different perspectives and the value in doing so. Making any statement on his ability to adjust his opinion is impossible, I haven&#39;t seen the necessity arise yet. Reserving my judgement.'),
(48, 6, '  Uses up-to-date syntax, chrome, and dreamweaver. Not a lot to comment on there, we all generally use the same programs so it makes helping each other easier. Regarding new tools, he hasn&#39;t sought out any that would help the group. We&#39;re still getting used to source control and agile as concepts, so I don&#39;t doubt he will in the future.'),
(49, 1, ' Dave does a good job at writing code. Very insightful and determined to get it done and correct, almost always leaves comments where necessary and can make it work.  '),
(49, 2, ' He does a good job at talking having a business background, he can talk good and usually get out of a certain situation. Sometimes he needs to differentiate technical talking to generic talk, I have noticed that he talks more than he needs to sometimes. '),
(49, 3, ' There have been a few occasions where he puts personal issues in front of the group. Which I can understand having a job and kids gets tough, however through some time management I think this can help the group.'),
(49, 4, ' He does the work, gets it done. However a couple of times we have suffered from late points because of work not being done by each group member. '),
(49, 5, ' We listen to each other, we negotiate and demonstrate each side of the problem. As well as try to incorporate other groups ideas.'),
(49, 6, ' Dave still uses notepad I believe, I would encourage him to use new tools like brackets or atom as a text editor. I will give him credit, he can make a nice website using notepad++'),
(50, 1, ' The quality of her code and writing so far have both been great. Not too much to say there, the sprints have been easy for the most part. Amount of work completed was rated &#39;Slightly above average&#39; due to her having some issues doing proportional work during early sprints. She did have good justification, and has already made up for it.'),
(50, 2, ' Regarding client communication,  I&#39;ve rated everyone in my group the same. We didn&#39;t ask the SCRUM trainer any questions when he was acting as our client during the country web page exercises, and I don&#39;t think any of us are aware of other opportunities to talk with clients. She&#39;s a very creative and professional writer, as well as listener. Sometimes it can be difficult to stay on task when working in class with her. There have been a couple times where she starts to talk about something non-related and I fall behind. I enjoy casually talking, but focusing on more than one conversation takes too much focus for me.'),
(50, 3, '  Very cooperative person, always wants to organize times to meet and help others. Extremely respectful person, always makes an attempt to right any wrongs. She hasn&#39;t especially went out of her way to give constructive feedback to the rest of the group, but she has given some. I think once we all get more comfortable with each other we&#39;ll be able to help each other more in that regard. I haven&#39;t seen her get a chance to help someone else with a programming issue yet, so I put &#39;average&#39; because I&#39;m reserving my judgement.'),
(50, 4, '  She is the main person who tries to organize meetings and is really proactive about it. I can tell she has a strong sense of responsibility when she&#39;s assigned tasked but isn&#39;t able to complete them, you can tell that she feels bad about it and actively tries to compensate for it.'),
(50, 5, '  I thought about this a lot but I&#39;m really just not sure about this aspect of her. I haven&#39;t seen the necessity arise for her opinion to change, and I don&#39;t know what she would do. I expect my next peer review will have this section more fleshed out, but for now I&#39;ll put &#39;average&#39;, meaning reserving my judgement.'),
(50, 6, '  She uses all the same developer tools the rest of the group does, and was very willing to try out discord as a way to screen share. Even after that, she sought out and found a chrome app that she thinks might be even better to try. Definitely willing to adapt to new tools.'),
(51, 1, 'His code is solid. However, his comments could be a little bit more clear.  That being said we all could probably use work on our comments.                          '),
(51, 2, 'I was out the classroom the day we spoke with the product owner, but based on what i could hear over the microphone, he sounded good.'),
(51, 3, ' Good at helping others with their stuff so that we don&#39;t fall behind. Needs improvement in the same way we all do, by getting more experience in this type of setting.'),
(51, 4, ' He does well with getting work done. I haven&#39;t seen anyone in our group that hasn&#39;t done well with this.'),
(51, 5, 'He helps come up with solutions, but always is willing to go with other ideas. And willing to try both to see which works better.'),
(51, 6, ' He uses the right tools for the job, so far. But we may need more in the future, again at this point I am not sure of anything different that can be done.'),
(52, 1, ' I feel like I do a good job of looking up solutions if my code isn&#39;t great. But I could comment better.'),
(52, 2, ' I feel like I can do a good job with all this, however I was absent from the class the only time we have communicated with the product owner so far.'),
(52, 3, ' I feel like I am a very go with the flow person, so I can work cooperatively well, but I am not so great at pointing out the flaws of others. '),
(52, 4, 'Being responsible, and acting with integrity are some of my core values. So while I feel like I excel at this, I also realize that I always can be better about it.'),
(52, 5, ' Adaptability is my number one Clifton Strength, I feel like I do well with these. That being said no one is perfect.'),
(52, 6, ' If I know what to use, I will definitely use the appropriate tools. I don&#39;t really research new and better tools to use though.  '),
(53, 1, 'Based on where we are at, I feel like he does quality work. That being said we are students and all of our quality work, could function better, and be of better quality.'),
(53, 2, ' I  was absent the day we spoke with the product owner, so i don&#39;t feel qualified to answer at this point.'),
(53, 3, ' He does a good job at getting his stuff done and then going on to help others if they need help. I would need more experience with him to not what he needs to improve on here.'),
(53, 4, ' He seems good at assuming responsibility for his work, and stays until we are done. Again I need more experience with him to know where he needs improvement.'),
(53, 5, 'He seems open to the ideas of others, and has been willing to make changes based on those ideas. I&#39;m sure there is room to improve somewhere.'),
(53, 6, ' We haven&#39;t had a need to apply a bunch of different technologies at this point. Need to see more in the future.'),
(54, 1, ' The work of his that I have seen, has been clean and effective. We are new to programming though so I am sure there is room to imporve.'),
(54, 2, 'Based on what I have seen so far It seems that he is an effective communicator, he gives good ideas, and listens well. '),
(54, 3, ' Based on experiences so far he seems to be able to work cooperatively, but need more experience.   '),
(54, 4, ' Base on what I have seen he is great at all this. But I need more experience to  really know for sure.'),
(54, 5, ' I know he is willing to take the point of view of others, I have helped him, and he has taken that help.'),
(54, 6, ' Based on what we have done so far I don&#39;t really know how to evaluate this in a way that would be constructive.'),
(55, 1, 'Lexi always had her code written very well. She was able to get what needed to be done in the code done correctly. The one thing she could improve on would be doing a little more work so far. She was falling behind in some other classes though so we agreed to pick up some of her work to help get caught up and towards the end she was able to focus more on the group work then.'),
(55, 2, ' Lexi was really good at communicating with everyone in our group. If there was ever a problem or she needed help with something she would never be too afraid to ask for it and always would give us more of a reason behind it rather than just stating she had a problem with something. I would say that if she could improve on anything it would be to communicate more in class than over slack or messages so that we would be able to work things out easier.'),
(55, 3, ' I would say that she was very good at acting on something that needed attention. She was also very good at respecting everyone and making sure that we knew what we were doing right and wrong. I would say that she could improve on would be more letting us help her with other homework or other stuff to help her get caught up and being a little more open about asking questions on some things.'),
(55, 4, ' I would have to say that she would always take responsibility for things that she couldn&#39;t get done or mistakes that came up. Also whenever we would assign her specific tasks for an assignment she would get them done, but following up on that earlier on she had trouble getting things to work, so we decided to pick up on some of her work resulting in her doing less.'),
(55, 5, ' I would say that if there is something that needs to be heard she is willing to put her beliefs aside to understand it. She is really good at realizing others opinions on things and also speaking up when she feels she has something important to discuss or say. There really is not much that she needs to improve upon on this area.'),
(55, 6, ' I would say that she has good knowledge of which tools to use when. The downside though is that she will have problems with logging in some places frequently causing delay for some projects but never a big enough problem to make it so we couldn&#39;t finish it.'),
(56, 1, ' They did more than their share of work when a group member was not there so their work had to be split between the other group members. Could work better on user friendly solutions.'),
(56, 2, 'Keeps in contact with other members of the group and uses appropriate language. Could improve on writing professionally uses abbreviations in chat.'),
(56, 3, ' They worked well with group members and worked with them to come up with solution all group members were okay with. Could put in more input during group talks, He just kind of lets others choose most decisions for him.'),
(56, 4, ' He has showed up to each meeting and got assignments done on time. Could work on owning up to mistakes there have been a few that he makes and then just hopes no one will notice.'),
(56, 5, ' Willing to change their opinion somewhat, could work on not being so stubborn on certain topics and not being so set in his ways.'),
(56, 6, ' Used appropriate tools and looked online for tools that would make assignments easier like a wire frame diagram tool he found online.'),
(57, 1, ' Work is done well and functions, There are some times that he does a little less than his fair share ans others have to pick up some slack.'),
(57, 2, ' When communicating he communicates in a professional manner and listens well. He could improve by communicating with group more often.'),
(57, 3, ' He is very open to changing things to better fit what the rest of the groups wants. He could provide more constructive criticism he does not give very much feedback. '),
(57, 4, ' Very willing to own up to his mistakes. He lately has done less work than he has been assigned  and has missed the last couple meetings, so maybe work on attendance more.'),
(57, 5, ' Willing to change opinion and adapt when tasks change and see things from others point of view. Could improve on making his own ideas he just mostly &#34;Goes with the flow&#34;.'),
(57, 6, 'He uses the appropriate technology to accomplish a task, but could work on looking for new tools that could make tasks easier to accomplish'),
(58, 1, ' Does more than his share of work most weeks and does it very well, could work on making solutions look nicer sometimes his solutions can be confusion.'),
(58, 2, ' Written communication in written very professionally and communicates often. Does not communicate very professionally in most situations and says some things that come off as a mean and unnecessary '),
(58, 3, ' He is very willing to help group members when they encounter an issue in their work, could work on using more respectful words and gestures, and can sometimes have a sort of &#34;my way or no way&#34; mentality.'),
(58, 4, ' Very good at completing assignments and attends every meeting, except one but he had told me he was going to miss it prior to meeting. Sometimes when he makes a mistake he seems to play it off as someone else miscommunication with him could work on that but other than that he does very well in this category.'),
(58, 5, ' Willing to change when the task calls for it. Sometimes he seems very set in his ways and not willing to change his way to make it easier for other group members'),
(58, 6, ' Actively searching for tools to make our work easier. Sometimes he spends more time searching for tools than it would&#39;ve taken to just do it with old tools.'),
(59, 1, ' Takiyo was on top of his code. The quality was always good and there were very little errors in his code. If there was anything to improve on I would maybe just say allow us to work on the code more sometimes cause he will take a lot of the work load.'),
(59, 2, 'Takiyo is good at communicating between the group and do it in a way that everybody can understand. He demonstrates the ability to listen very well during our meetings and ;will take in every bodies opinion on stuff. If he would have to improve on anything I would say it would have to be communicating more on his opinion on topics.'),
(59, 3, ' Takiyo is very good at working cooperatively and providing criticism in peer reviews for what happened and what needs to be fixed. I would say that he would maybe just need to improve on stating when something needs to be improved upon more towards the person themselves than the work.'),
(59, 4, ' Takiyo is really good at performing his tasks and offers to accept more than needed. I would say though he could maybe improve upon not just him but our group as a whole would be creating and attending meetings.'),
(59, 5, ' Takiyo is really good at being adaptable and flexible towards situations and accepting of all points of view. I would say there isn&#39;t much to improve in this area.'),
(59, 6, ' I would say that he has very good knowledge of his technology and how to use it. He also tells us when he finds something useful out of a powerpoint or something. There isn&#39;t much to improve on in this area.'),
(60, 1, ' I would like to say that I have a high quality standard for my code. But I could definitely start picking up more of the assignments to even out tasks.'),
(60, 2, ' I would say that I like to speak what needs to be spoken in the current situation that I&#39;d be in. The one thing that I could improve upon is writing more professional due to habit of writing more casually.'),
(60, 3, 'I would say that I follow procedures and follow everyone&#39;s opinion on a topic. I would say that out of most of these I end up helping a lot of people solve problems in there codes. I encourage people if they have problems to ask for help since I like debugging other people work and finding solutions. If there would be anything for me to improve upon it would be giving negative feedback to others.'),
(60, 4, ' I would say that I am very willing to accept mistakes that I make and take responsibility for them. If there was anything that I could improve on it would be to schedule more meeting with the group.'),
(60, 5, ' If I feel there is a better way to approach a problem I am willing to change my opinion based on the answer. I would say that sometimes i could maybe voice my opinion a little more towards a topic.'),
(60, 6, ' I would say that I like to find the quickest and most easy way to tackle problems leading me to look for appropriate tools for the job. If there is anything that I could do better is share some of the shortcuts or better solutions that I have found with the group to help everyone out.'),
(61, 1, ' Takiyo is an important contributor to the success of our team. He always steps up if there was unfinished work that was not assigned to him and is more that willing to take on the extra work if needed.&#13;&#10;Though Takiyo always has functional code, if he does notice a small mistake that does not affect a code to run, instead of fixing it he may leave it if crunched for time.&#13;&#10;'),
(61, 2, ' Takiyo effectively communicates his point of view and expectations to the team. He will always listen to you if you have any questions regarding a task or project. &#13;&#10;Takiyo should work on communicating to the team at a reasonable date before the project is due. He seems to communicate the most during the last few hours before a deadline, which then causes stress on the entire team.&#13;&#10;'),
(61, 3, ' Takiyo brings new ideas to the team and shares his knowledge when beneficial.  He will always make time for teamwork even if we cannot meet in person, online.&#13;&#10;Taikyo most of the time responds well to constructive criticism, but sometimes depending on the situation, not so well.'),
(61, 4, ' Takiyo immediately informs the team of any mistakes and will correct it or ask for help if needed. He exceeds getting team assignments turned in on time, and makes sure the team is on time as well. &#13;&#10;Takiyo could be better at handling the pressure of a deadline approaching, which sometimes causes tension within the team.'),
(61, 5, ' Takiyo is always informing others of new ideas. He will always share if he found an easier and efficient way to do something.&#13;&#10;Takiyo doesn&#39;t always recognize the other teammates point of views. '),
(61, 6, ' Takiyo is always actively seeking out new tools and methods for improving our team. &#13;&#10;Instead of using an abundance of different programs and tools that take up more time, he should be more willing to work with one that can perform all of the tasks needed.'),
(62, 1, ' Aaron exceeds in quality in all of the work he does. He doesn&#39;t think twice about taking on an extra task if needed.&#13;&#10;Aaron can sometimes &#39;jump the gun&#39; and complete tasks without verifying with the team that they were finished. '),
(62, 2, ' Aaron is always willing to listen and speaks in a professional manner.&#13;&#10;If anything, Aaron may need to communicate more.'),
(62, 3, ' Aaron always follows the team rules and ensures the team does as well.&#13;&#10;Aaron seems as though he holds back on thoughts for constructive criticism.'),
(62, 4, ' Aaron is very punctually usually always early. He gets what is needed to be done done, and evenly distributes tasks.&#13;&#10;Aaron needs to work on his willingness to meet up with the team on a more regular basis and not just online but in person.'),
(62, 5, ' Aaron listens to everyone else&#39;s opinion on changes and is easily adapted after a change.&#13;&#10;Aaron is very quiet and it may impact our team assignments without ever receiving his feedback.'),
(62, 6, ' Aaron is open to learn about new tools and equipment. &#13;&#10;He doesn&#39;t always think to suggest new tools that may help the team improve on something.'),
(63, 1, ' I always make sure that my code is effective and functional before release. If I am questionable about anything, I immediately raise attention to my team members.&#13;&#10;I think I could work on the amount of work I contribute.'),
(63, 2, ' I am always open to listen and I use appropriate language well.&#13;&#10;I need to work on getting my communication skills on a more professional level. I tend to lock up and not know what to say in front of multiple people.'),
(63, 3, ' I believe I exceed in team cooperation. I am always trying to make sure everyone is on the same page before starting team assignments.&#13;&#10;I am not always the best at receiving constructive criticism. I don&#39;t get defensive, I more or less feel I&#39;m being told I&#39;m doing something wrong or in trouble.'),
(63, 4, ' I always own up to any mistakes no matter how minor they may be. I make sure I get all assigned tasks done quickly and immediatly let the others know if I have issues.&#13;&#10;I fail at being punctual and need to make some kind of an adjustment to fix that.'),
(63, 5, ' I always listen to other opinions and will change if it is more efficient. Even though I&#39;m open recognizing others&#39; point of view, I don&#39;t always see where they are coming from.'),
(63, 6, ' I am constantly looking at new and improve tools and methods to improve myself, and my team. &#13;&#10;After getting used to a certain program or software, I sometimes have difficulties if I am needed to change.'),
(64, 1, 'Overall I think my code was functional and (mostly) documented, but I didn&#39;t take the time to learn about things that could have benefited my team. Even if they were simple things like css grid layout that I could have learned in an hour, I didn&#39;t sink the time in to it that I feel I should have. Towards the end of the semester though, I looked in to PHP and Jquery somewhat and even though I wasn&#39;t able to apply the knowledge to our project, I feel like it will help me in the future.'),
(64, 2, ' I don&#39;t go out of my way to communicate in class enough. When Becky was our product owner for The Business site the only time we would go to her would be to get an interpretation of some homework instructions, but never feedback on the content or functionality we chose to add to the page. My ability to write professionally is decent. I have very round-about ways of stating things through text, but I have an above average sized vocabulary to back it up. I feel like I&#39;m able to listen effectively most of the time, although I catch myself following irrelevant trains of thought during lecture now and then.'),
(64, 3, 'I think one of my strong suits, and the biggest thing on my mind in a group setting, is providing and accepting constructive criticism. I think my ability to accept all forms of criticism and take them to heart without feeling attacked is something I do much better than others. On the other hand, my ability to give criticism isn&#39;t tailored enough to who I&#39;m giving it to. I&#39;m often erring on the side of harshness, and it can absolutely dilute the message. I&#39;ve rated myself &#34;slightly above average&#34; because I think that&#39;s where my personal providing/accepting spectrum averages out to. My ability to compromise definitely needs work. I can compromise, but it&#39;s often after a rigorous argument that isn&#39;t proportional to the weight of the disagreement. Sometimes we just need to make up our mind, and it matters more to be on the same page than the specifics of a decision.'),
(64, 4, ' I would say my class attendance counts as a meeting, and my CAD attendance was sub-par. I didn&#39;t rate myself lower because I did arrange several of our out-of-class meetings, although I was commonly 5-10 minutes late. My group-assigned tasks were almost always completed before Sunday night, in order to give feedback on what my group is doing that night and to avoid bottle-necking tasks. My solo assignments were not always completed on time, and didn&#39;t take initiative in rehearsing for the sprint presentations.'),
(64, 5, ' I think I&#39;m fairly good at recognizing and comprehending dissenting opinions. I don&#39;t really view anyone who disagrees with me as an antagonist, and if I question their decisions it&#39;s always from an inquisitive angle. Regarding actually changing my opinion due to another&#39;s point of view, I could use a bit more of an open mind at times. Sometimes I jump to conclusions about how a conversation will go due to some prior conversation, but my conclusion might act as a sort of self fulfilling prophesy. An example of this is when Lexi brought up that she interpreted the directions differently than I, and I assumed she wouldn&#39;t believe me if I only gave my reasoning on why I thought she was incorrect. I ended up going way overboard and typed a big paragraph and cited evidence of why I think I was right about my interpretation. She was just curious on what I thought, and was willing to believe me, but I had assumed it would mirror an earlier conversation when she was less receptive. When circumstances change regarding an appointment or prior obligations, I can be quite understanding.'),
(64, 6, 'I make a conscious effort to understand what makes something the right tool for the job. When choosing an IDE for web development I wanted to make sure it had some way to host a local server, and had source control integration. I ended up sticking with Visual Studio but I explored other options like Atom and the Visual Studio text editor. I can&#39;t say I have been proactive in searching out new tools to help us, but I&#39;ve been receptive and open minded about making the switch.');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(8) NOT NULL,
  `question_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_description`, `category_id`) VALUES
(1, 'Quality of code written was appropriate\r\n', 1),
(2, 'The amount of work completed for the semester was appropriate.\r\n', 1),
(3, 'Solution is effective, functional, and user friendly\r\n', 1),
(4, 'Exhibits professional communication with the client\r\n', 2),
(5, 'Speaks professionally\r\n', 2),
(6, 'Writes professionally\r\n', 2),
(7, 'Demonstrates ability to listen effectively\r\n', 2),
(8, 'Uses language appropriate to situation\r\n', 2),
(9, 'Works cooperatively with others/follows team rules and procedures\r\n', 3),
(10, 'Demonstrates respect for others through word and action\r\n', 3),
(11, 'Provides and accepts constructive criticism\r\n', 3),
(12, 'Respects group decisions when they conflict with their own analysis\r\n', 3),
(13, 'Helps others to solve programming issues they encounter\r\n', 3),
(14, 'Attends meetings regularly and punctually\r\n', 4),
(15, 'Assumes responsibility for completing assignments\r\n', 4),
(16, 'Performs assigned tasks\r\n', 4),
(17, 'When individual made a mistake, they owned it and took responsibility for it.  \r\n', 4),
(18, 'Demonstrates willingness to recognize others’ point of view\r\n', 5),
(19, 'Willing to change opinion as circumstances change.  \r\n', 5),
(20, 'Uses appropriate programming tools, equipment, and methods\r\n', 6),
(21, 'Seeks out and uses new tools that would be advantageous to the project.\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `questioncategory`
--

CREATE TABLE `questioncategory` (
  `category_id` int(8) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questioncategory`
--

INSERT INTO `questioncategory` (`category_id`, `category_description`) VALUES
(1, 'Working Productively/Assuring Quality'),
(2, 'Communicating clearly'),
(3, 'Working Cooperatively'),
(4, 'Acting Responsibly/Acting with Integrity'),
(5, 'Thinking Critically and Creatively'),
(6, 'Applying Technology');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_description`) VALUES
(1, 'Spring 2018');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(8) NOT NULL,
  `student_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`) VALUES
(456080, 'Jason West'),
(12000351, 'Aron Jones'),
(12227032, 'David Johnson'),
(13772706, 'Rebecca Heineck'),
(14513732, 'Jacob Ludwiczak'),
(15078725, 'Preston Morgan'),
(15258424, 'Chad Wolding'),
(15483285, 'Christine Sommers'),
(15514784, 'Taylor Wachowiak'),
(15618953, 'Megan Melville'),
(15766412, 'Takiyo Brytowski'),
(15799848, 'Change Hwn Khang'),
(15952624, 'Dustin Wergin'),
(16021485, 'Sylvan Dyken'),
(16046432, 'Riley Lewellin'),
(16151199, 'Alexis Dumpprope'),
(16180579, 'Isaiah Zdroik'),
(16264806, 'Bryce Menadue'),
(16269525, 'Shawn Biedenbender'),
(16312581, 'Kyle Charneski'),
(16327947, 'Nicholas Flaig'),
(16497896, 'Aaron Weber'),
(16504266, 'Asher Smith'),
(16552132, 'Nicolas Wavruk'),
(16587765, 'Corben Phelps'),
(16590612, 'Matthew Skifton'),
(16591938, 'Bradley Lucksted');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `student_reviewed` int(8) NOT NULL,
  `team_id` int(8) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `survey_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `student_id`, `student_reviewed`, `team_id`, `submit_time`, `survey_time`) VALUES
(29, 16591938, 16591938, 4, '0000-00-00 00:00:00', ''),
(30, 16591938, 15483285, 4, '0000-00-00 00:00:00', ''),
(31, 16591938, 15514784, 4, '0000-00-00 00:00:00', ''),
(32, 16590612, 16590612, 1, '0000-00-00 00:00:00', ''),
(33, 16590612, 456080, 1, '0000-00-00 00:00:00', ''),
(34, 16590612, 14513732, 1, '0000-00-00 00:00:00', ''),
(35, 16590612, 16327947, 1, '0000-00-00 00:00:00', ''),
(40, 16046432, 16552132, 7, '2018-03-05 21:39:16', ''),
(41, 16046432, 16552132, 7, '2018-03-05 21:39:16', ''),
(42, 16046432, 16552132, 7, '2018-03-05 21:39:17', ''),
(43, 16046432, 16504266, 3, '2018-03-05 22:18:07', ''),
(44, 16046432, 16046432, 3, '2018-03-05 23:02:43', ''),
(45, 16046432, 16046432, 3, '2018-03-05 23:02:43', ''),
(46, 16046432, 16046432, 3, '2018-03-05 23:02:43', ''),
(47, 15766412, 15766412, 2, '2018-03-07 18:05:10', ''),
(48, 15766412, 16497896, 2, '2018-03-07 20:12:07', ''),
(49, 16264806, 12227032, 5, '2018-03-07 21:06:14', ''),
(50, 15766412, 16151199, 2, '2018-03-08 22:27:07', ''),
(51, 14513732, 16590612, 1, '2018-03-09 15:57:02', ''),
(52, 14513732, 14513732, 1, '2018-03-09 16:11:24', ''),
(53, 14513732, 16327947, 1, '2018-03-09 16:21:35', ''),
(54, 14513732, 456080, 1, '2018-03-09 16:42:46', ''),
(55, 16497896, 16151199, 2, '2018-03-09 21:22:44', ''),
(56, 16504266, 16504266, 3, '2018-03-10 05:37:01', ''),
(57, 16504266, 16552132, 3, '2018-03-10 05:44:50', ''),
(58, 16497896, 16046432, 3, '2018-03-10 05:53:51', ''),
(59, 16497896, 15766412, 2, '2018-03-11 18:59:06', ''),
(60, 16497896, 16497896, 2, '2018-03-11 20:34:44', ''),
(61, 16151199, 15766412, 2, '2018-03-18 02:01:31', ''),
(62, 16151199, 16497896, 2, '2018-03-18 02:16:35', ''),
(63, 16151199, 16151199, 7, '2018-03-18 02:31:17', ''),
(64, 15766412, 15766412, 2, '2018-05-02 18:46:05', '4,984');

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestion`
--

CREATE TABLE `surveyquestion` (
  `survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_selection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveyquestion`
--

INSERT INTO `surveyquestion` (`survey_id`, `question_id`, `user_selection`) VALUES
(40, 16, 0),
(41, 16, 0),
(42, 16, 0),
(40, 15, 1),
(41, 15, 1),
(42, 15, 1),
(40, 1, 2),
(40, 5, 2),
(40, 14, 2),
(41, 1, 2),
(41, 5, 2),
(41, 14, 2),
(42, 1, 2),
(42, 5, 2),
(42, 14, 2),
(47, 21, 2),
(48, 21, 2),
(49, 4, 2),
(50, 4, 2),
(58, 10, 2),
(64, 12, 2),
(40, 9, 3),
(40, 17, 3),
(41, 9, 3),
(41, 17, 3),
(42, 9, 3),
(42, 17, 3),
(47, 4, 3),
(47, 12, 3),
(48, 4, 3),
(49, 3, 3),
(49, 15, 3),
(49, 16, 3),
(49, 21, 3),
(58, 5, 3),
(64, 4, 3),
(64, 5, 3),
(32, 4, 4),
(40, 4, 4),
(40, 7, 4),
(40, 10, 4),
(40, 11, 4),
(40, 18, 4),
(40, 19, 4),
(41, 4, 4),
(41, 7, 4),
(41, 10, 4),
(41, 11, 4),
(41, 18, 4),
(41, 19, 4),
(42, 4, 4),
(42, 7, 4),
(42, 10, 4),
(42, 11, 4),
(42, 18, 4),
(42, 19, 4),
(49, 12, 4),
(52, 21, 4),
(55, 15, 4),
(57, 2, 4),
(57, 14, 4),
(57, 16, 4),
(57, 21, 4),
(58, 7, 4),
(58, 8, 4),
(58, 11, 4),
(59, 14, 4),
(60, 6, 4),
(60, 11, 4),
(64, 9, 4),
(64, 14, 4),
(64, 19, 4),
(32, 1, 5),
(32, 2, 5),
(32, 3, 5),
(32, 6, 5),
(32, 7, 5),
(32, 8, 5),
(32, 14, 5),
(32, 17, 5),
(32, 21, 5),
(40, 2, 5),
(40, 3, 5),
(40, 8, 5),
(40, 13, 5),
(41, 2, 5),
(41, 3, 5),
(41, 8, 5),
(41, 13, 5),
(42, 2, 5),
(42, 3, 5),
(42, 8, 5),
(42, 13, 5),
(47, 5, 5),
(47, 11, 5),
(47, 14, 5),
(48, 11, 5),
(48, 12, 5),
(48, 19, 5),
(49, 1, 5),
(49, 2, 5),
(49, 6, 5),
(49, 9, 5),
(49, 11, 5),
(49, 17, 5),
(49, 20, 5),
(50, 5, 5),
(50, 12, 5),
(50, 13, 5),
(50, 18, 5),
(50, 19, 5),
(51, 1, 5),
(51, 3, 5),
(51, 5, 5),
(51, 6, 5),
(51, 7, 5),
(51, 8, 5),
(51, 12, 5),
(51, 18, 5),
(51, 19, 5),
(51, 20, 5),
(51, 21, 5),
(52, 1, 5),
(52, 2, 5),
(52, 3, 5),
(52, 4, 5),
(52, 5, 5),
(52, 6, 5),
(52, 7, 5),
(52, 8, 5),
(52, 9, 5),
(52, 10, 5),
(52, 11, 5),
(52, 12, 5),
(52, 13, 5),
(52, 14, 5),
(52, 15, 5),
(52, 16, 5),
(52, 17, 5),
(52, 20, 5),
(53, 1, 5),
(53, 2, 5),
(53, 3, 5),
(53, 4, 5),
(53, 5, 5),
(53, 6, 5),
(53, 7, 5),
(53, 8, 5),
(53, 9, 5),
(53, 10, 5),
(53, 11, 5),
(53, 12, 5),
(53, 13, 5),
(53, 14, 5),
(53, 15, 5),
(53, 16, 5),
(53, 17, 5),
(53, 18, 5),
(53, 19, 5),
(53, 20, 5),
(53, 21, 5),
(54, 1, 5),
(54, 2, 5),
(54, 3, 5),
(54, 4, 5),
(54, 5, 5),
(54, 6, 5),
(54, 7, 5),
(54, 8, 5),
(54, 9, 5),
(54, 10, 5),
(54, 11, 5),
(54, 12, 5),
(54, 13, 5),
(54, 14, 5),
(54, 15, 5),
(54, 16, 5),
(54, 17, 5),
(54, 18, 5),
(54, 19, 5),
(54, 20, 5),
(54, 21, 5),
(55, 2, 5),
(55, 14, 5),
(55, 20, 5),
(55, 21, 5),
(56, 6, 5),
(56, 11, 5),
(57, 1, 5),
(57, 4, 5),
(57, 15, 5),
(58, 4, 5),
(58, 12, 5),
(58, 18, 5),
(59, 4, 5),
(59, 6, 5),
(59, 10, 5),
(59, 13, 5),
(59, 17, 5),
(60, 2, 5),
(60, 8, 5),
(60, 9, 5),
(60, 14, 5),
(64, 1, 5),
(64, 7, 5),
(64, 10, 5),
(64, 15, 5),
(64, 21, 5),
(29, 1, 6),
(32, 5, 6),
(32, 9, 6),
(32, 10, 6),
(32, 13, 6),
(32, 15, 6),
(32, 16, 6),
(32, 18, 6),
(32, 20, 6),
(35, 4, 6),
(35, 5, 6),
(35, 6, 6),
(40, 20, 6),
(41, 20, 6),
(42, 20, 6),
(43, 1, 6),
(47, 19, 6),
(48, 5, 6),
(49, 5, 6),
(50, 2, 6),
(50, 16, 6),
(51, 4, 6),
(51, 9, 6),
(51, 10, 6),
(51, 11, 6),
(51, 13, 6),
(51, 14, 6),
(51, 15, 6),
(51, 16, 6),
(51, 17, 6),
(52, 18, 6),
(52, 19, 6),
(55, 3, 6),
(55, 4, 6),
(55, 9, 6),
(55, 11, 6),
(55, 13, 6),
(55, 16, 6),
(55, 18, 6),
(55, 19, 6),
(56, 3, 6),
(56, 4, 6),
(56, 5, 6),
(56, 7, 6),
(56, 13, 6),
(56, 17, 6),
(56, 18, 6),
(57, 3, 6),
(57, 11, 6),
(57, 17, 6),
(58, 3, 6),
(58, 6, 6),
(58, 9, 6),
(58, 17, 6),
(58, 19, 6),
(58, 20, 6),
(59, 1, 6),
(59, 3, 6),
(59, 5, 6),
(59, 7, 6),
(59, 8, 6),
(59, 9, 6),
(59, 11, 6),
(59, 12, 6),
(59, 15, 6),
(59, 18, 6),
(59, 19, 6),
(59, 21, 6),
(60, 1, 6),
(60, 3, 6),
(60, 4, 6),
(60, 5, 6),
(60, 7, 6),
(60, 12, 6),
(60, 15, 6),
(60, 16, 6),
(60, 18, 6),
(60, 19, 6),
(60, 21, 6),
(64, 3, 6),
(64, 6, 6),
(64, 8, 6),
(64, 11, 6),
(64, 13, 6),
(64, 16, 6),
(64, 17, 6),
(64, 18, 6),
(64, 20, 6),
(32, 11, 7),
(32, 12, 7),
(32, 19, 7),
(34, 12, 7),
(35, 7, 7),
(35, 18, 7),
(40, 6, 7),
(40, 12, 7),
(41, 6, 7),
(41, 12, 7),
(42, 6, 7),
(42, 12, 7),
(43, 3, 7),
(43, 9, 7),
(43, 10, 7),
(43, 11, 7),
(43, 21, 7),
(44, 1, 7),
(44, 2, 7),
(44, 9, 7),
(44, 10, 7),
(44, 11, 7),
(45, 1, 7),
(45, 2, 7),
(45, 9, 7),
(45, 10, 7),
(45, 11, 7),
(46, 1, 7),
(46, 2, 7),
(46, 9, 7),
(46, 10, 7),
(46, 11, 7),
(47, 3, 7),
(47, 7, 7),
(47, 9, 7),
(47, 20, 7),
(48, 14, 7),
(49, 10, 7),
(49, 19, 7),
(50, 11, 7),
(51, 2, 7),
(55, 1, 7),
(55, 5, 7),
(55, 6, 7),
(55, 7, 7),
(55, 8, 7),
(55, 17, 7),
(56, 1, 7),
(56, 8, 7),
(56, 9, 7),
(56, 10, 7),
(56, 12, 7),
(56, 19, 7),
(56, 20, 7),
(56, 21, 7),
(57, 5, 7),
(57, 6, 7),
(57, 7, 7),
(57, 8, 7),
(57, 9, 7),
(57, 10, 7),
(57, 13, 7),
(57, 18, 7),
(57, 19, 7),
(57, 20, 7),
(58, 1, 7),
(58, 2, 7),
(58, 13, 7),
(58, 14, 7),
(58, 15, 7),
(59, 2, 7),
(59, 16, 7),
(59, 20, 7),
(60, 10, 7),
(60, 17, 7),
(60, 20, 7),
(63, 14, 7),
(64, 2, 7),
(29, 2, 8),
(29, 3, 8),
(29, 4, 8),
(29, 5, 8),
(29, 6, 8),
(29, 8, 8),
(29, 9, 8),
(29, 10, 8),
(29, 11, 8),
(29, 12, 8),
(29, 13, 8),
(29, 14, 8),
(29, 15, 8),
(29, 16, 8),
(29, 17, 8),
(29, 18, 8),
(29, 19, 8),
(29, 20, 8),
(29, 21, 8),
(31, 1, 8),
(31, 2, 8),
(31, 3, 8),
(31, 4, 8),
(31, 5, 8),
(31, 6, 8),
(31, 7, 8),
(31, 8, 8),
(31, 9, 8),
(31, 10, 8),
(31, 11, 8),
(31, 12, 8),
(31, 13, 8),
(31, 14, 8),
(31, 15, 8),
(31, 16, 8),
(31, 17, 8),
(31, 18, 8),
(31, 19, 8),
(31, 20, 8),
(31, 21, 8),
(33, 1, 8),
(33, 5, 8),
(33, 6, 8),
(33, 7, 8),
(33, 8, 8),
(33, 11, 8),
(33, 12, 8),
(33, 13, 8),
(33, 18, 8),
(33, 19, 8),
(34, 1, 8),
(34, 3, 8),
(34, 9, 8),
(34, 10, 8),
(34, 11, 8),
(34, 13, 8),
(34, 14, 8),
(34, 17, 8),
(34, 20, 8),
(34, 21, 8),
(35, 2, 8),
(35, 3, 8),
(35, 8, 8),
(35, 9, 8),
(35, 10, 8),
(35, 11, 8),
(35, 12, 8),
(35, 13, 8),
(35, 19, 8),
(40, 21, 8),
(41, 21, 8),
(42, 21, 8),
(43, 2, 8),
(43, 4, 8),
(43, 7, 8),
(43, 8, 8),
(43, 13, 8),
(43, 14, 8),
(43, 15, 8),
(44, 3, 8),
(44, 4, 8),
(44, 13, 8),
(44, 14, 8),
(44, 15, 8),
(45, 3, 8),
(45, 4, 8),
(45, 13, 8),
(45, 14, 8),
(45, 15, 8),
(46, 3, 8),
(46, 4, 8),
(46, 13, 8),
(46, 14, 8),
(46, 15, 8),
(47, 1, 8),
(47, 2, 8),
(47, 6, 8),
(47, 8, 8),
(47, 10, 8),
(47, 15, 8),
(47, 16, 8),
(47, 18, 8),
(48, 1, 8),
(48, 2, 8),
(48, 3, 8),
(48, 7, 8),
(48, 8, 8),
(48, 9, 8),
(48, 10, 8),
(48, 16, 8),
(48, 17, 8),
(48, 18, 8),
(48, 20, 8),
(49, 7, 8),
(49, 8, 8),
(49, 13, 8),
(49, 14, 8),
(49, 18, 8),
(50, 1, 8),
(50, 3, 8),
(50, 6, 8),
(50, 7, 8),
(50, 8, 8),
(50, 9, 8),
(50, 14, 8),
(50, 15, 8),
(50, 20, 8),
(50, 21, 8),
(55, 10, 8),
(55, 12, 8),
(56, 2, 8),
(56, 14, 8),
(56, 15, 8),
(56, 16, 8),
(57, 12, 8),
(58, 16, 8),
(58, 21, 8),
(60, 13, 8),
(61, 1, 8),
(61, 14, 8),
(63, 2, 8),
(63, 4, 8),
(63, 5, 8),
(29, 7, 9),
(30, 1, 9),
(30, 2, 9),
(30, 3, 9),
(30, 4, 9),
(30, 5, 9),
(30, 6, 9),
(30, 7, 9),
(30, 8, 9),
(30, 9, 9),
(30, 10, 9),
(30, 11, 9),
(30, 12, 9),
(30, 13, 9),
(30, 14, 9),
(30, 15, 9),
(30, 16, 9),
(30, 17, 9),
(30, 18, 9),
(30, 19, 9),
(30, 20, 9),
(30, 21, 9),
(33, 2, 9),
(33, 3, 9),
(33, 4, 9),
(33, 9, 9),
(33, 10, 9),
(33, 14, 9),
(33, 15, 9),
(33, 16, 9),
(33, 17, 9),
(33, 20, 9),
(33, 21, 9),
(34, 2, 9),
(34, 4, 9),
(34, 5, 9),
(34, 6, 9),
(34, 7, 9),
(34, 8, 9),
(34, 15, 9),
(34, 16, 9),
(34, 18, 9),
(34, 19, 9),
(35, 14, 9),
(35, 15, 9),
(35, 16, 9),
(35, 17, 9),
(35, 20, 9),
(35, 21, 9),
(43, 5, 9),
(43, 16, 9),
(43, 17, 9),
(43, 18, 9),
(43, 19, 9),
(44, 5, 9),
(44, 6, 9),
(44, 7, 9),
(44, 8, 9),
(44, 16, 9),
(44, 17, 9),
(44, 18, 9),
(44, 19, 9),
(44, 21, 9),
(45, 5, 9),
(45, 6, 9),
(45, 7, 9),
(45, 8, 9),
(45, 16, 9),
(45, 17, 9),
(45, 18, 9),
(45, 19, 9),
(45, 21, 9),
(46, 5, 9),
(46, 6, 9),
(46, 7, 9),
(46, 8, 9),
(46, 16, 9),
(46, 17, 9),
(46, 18, 9),
(46, 19, 9),
(46, 21, 9),
(47, 13, 9),
(47, 17, 9),
(48, 6, 9),
(48, 13, 9),
(48, 15, 9),
(50, 10, 9),
(50, 17, 9),
(61, 2, 9),
(61, 3, 9),
(61, 4, 9),
(61, 5, 9),
(61, 6, 9),
(61, 7, 9),
(61, 8, 9),
(61, 9, 9),
(61, 10, 9),
(61, 11, 9),
(61, 12, 9),
(61, 13, 9),
(61, 15, 9),
(61, 16, 9),
(61, 17, 9),
(61, 18, 9),
(61, 19, 9),
(61, 20, 9),
(61, 21, 9),
(62, 1, 9),
(62, 2, 9),
(62, 3, 9),
(62, 4, 9),
(62, 5, 9),
(62, 6, 9),
(62, 7, 9),
(62, 8, 9),
(62, 9, 9),
(62, 10, 9),
(62, 11, 9),
(62, 12, 9),
(62, 13, 9),
(62, 14, 9),
(62, 15, 9),
(62, 16, 9),
(62, 17, 9),
(62, 18, 9),
(62, 19, 9),
(62, 20, 9),
(62, 21, 9),
(63, 1, 9),
(63, 3, 9),
(63, 6, 9),
(63, 7, 9),
(63, 8, 9),
(63, 9, 9),
(63, 10, 9),
(63, 11, 9),
(63, 12, 9),
(63, 13, 9),
(63, 15, 9),
(63, 16, 9),
(63, 17, 9),
(63, 18, 9),
(63, 19, 9),
(63, 20, 9),
(63, 21, 9),
(35, 1, 10),
(43, 6, 10),
(43, 12, 10),
(43, 20, 10),
(44, 12, 10),
(44, 20, 10),
(45, 12, 10),
(45, 20, 10),
(46, 12, 10),
(46, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(8) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `semester_id`, `team_name`) VALUES
(1, 1, 'Method Overload'),
(2, 1, 'Null Terminators'),
(3, 1, 'Memory Leak'),
(4, 1, 'You cant encapsulate us'),
(5, 1, 'Scrum Lords'),
(6, 1, 'Its a feature Not a bug'),
(7, 1, 'Capture The Campus'),
(8, 1, 'Restaurant Scheduling');

-- --------------------------------------------------------

--
-- Table structure for table `teamstudent`
--

CREATE TABLE `teamstudent` (
  `team_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamstudent`
--

INSERT INTO `teamstudent` (`team_id`, `student_id`) VALUES
(1, 456080),
(1, 14513732),
(1, 16327947),
(1, 16590612),
(2, 15766412),
(2, 16151199),
(2, 16497896),
(3, 16046432),
(3, 16504266),
(3, 16552132),
(4, 15483285),
(4, 15514784),
(4, 16591938),
(5, 12227032),
(5, 16264806),
(6, 15618953),
(6, 16021485),
(6, 16587765),
(7, 13772706),
(7, 15258424),
(7, 16180579),
(7, 16312581),
(8, 12000351),
(8, 15078725),
(8, 15952624),
(8, 16269525);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`survey_id`,`category_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `questioncategory`
--
ALTER TABLE `questioncategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_reviewed` (`student_reviewed`),
  ADD KEY `team_id` (`team_id`) USING BTREE;

--
-- Indexes for table `surveyquestion`
--
ALTER TABLE `surveyquestion`
  ADD PRIMARY KEY (`survey_id`,`question_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `user_selection` (`user_selection`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `teamstudent`
--
ALTER TABLE `teamstudent`
  ADD PRIMARY KEY (`team_id`,`student_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `questioncategory`
--
ALTER TABLE `questioncategory`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `questioncategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`survey_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `questioncategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`student_reviewed`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `survey_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`);

--
-- Constraints for table `surveyquestion`
--
ALTER TABLE `surveyquestion`
  ADD CONSTRAINT `surveyquestion_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveyquestion_ibfk_2` FOREIGN KEY (`survey_id`) REFERENCES `survey` (`survey_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surveyquestion_ibfk_3` FOREIGN KEY (`user_selection`) REFERENCES `choice` (`choice_id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teamstudent`
--
ALTER TABLE `teamstudent`
  ADD CONSTRAINT `teamstudent_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teamstudent_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
