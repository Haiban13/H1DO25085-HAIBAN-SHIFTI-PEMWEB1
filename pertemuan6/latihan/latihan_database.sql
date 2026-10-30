CREATE DATABASE modul_6_latihan;
USE modul_6_latihan;

CREATE TABLE `posts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(100) NOT NULL,
  `konten` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `posts` (`judul`, `konten`) VALUES
('Starlink is getting daytime data caps', 'Starlink is about to feel a little more like other ISPs, with a new data policy that mimics Anytime Minutes from the bad old days of highly restricted cellphone service. The satellite internet division of SpaceX will start throttling home internet for customers who use more than 1TB of Priority Access data per month during peak hours beginning in December. The change is being rolled out as part of a new "Fair Use policy" in the US and Canada.\n\nResidential customers will now start each monthly billing cycle with an allocation of "Priority Access" data that tracks what you\'re using from 7AM in the morning until 11PM at night. If you surpass that 1TB cap, which Starlink says less than 10 percent of users currently do, you\'ll be moved to "Basic Access" data, or deprioritized data during heavy network congestion, for the rest of your billing cycle.'),
('With Netflix\'s ads tier, you never know what you\'re going to get', 'Netflix Basic with Ads is finally here, offering a cheaper Netflix subscription at $6.99 per month with the tradeoff that you might have to watch some ads with your movies and TV shows. I spent some time messing around with a new account on the tier on Thursday, and while the experience of using Netflix was mostly the same, what struck me was the unpredictability of how many ads I\'d have to watch.\n\nNetflix says you can expect to see an "average of 4 to 5 minutes of ads per hour." That\'s about what I experienced as well, but I was surprised by when the ads might appear. It isn\'t like broadcast TV where you knew exactly when and, often, how many ads you\'d have to sit through before the show came back.'),
('Elon Musk\'s $7.99 Twitter Blue with verification is \'coming soon\' on iOS', 'The new Twitter Blue subscription isn\'t available just yet, though. Esther Crawford, a product manager at Twitter confirmed it\'s not live right now but says some users "may see us making updates because we are testing and pushing changes in real-time."\n\nWhile the updated app initially showed a revamped notifications screen that defaulted to displaying tweets from Verified users in the first tab (helping to promote the idea that paying for the new plan is the best way to make sure people actually see your tweets), this has since disappeared. As pointed out by one of my colleagues at The Verge and reverse engineer Jane Manchun Wong, the new layout disappears after quitting out of the app and opening it again.');
