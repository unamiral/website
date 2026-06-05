const puppeteer = require('puppeteer');
const fs = require('fs');

(async () => {
    const browser = await puppeteer.launch({headless: true});
    const page = await browser.newPage();
    const timeout = 5000;
    page.setDefaultTimeout(timeout);

    // Ensure screenshot directory exists
    const screenshotDir = 'screenshots';
    if (!fs.existsSync(screenshotDir)) {
        fs.mkdirSync(screenshotDir);
    }

    // Set viewport and go to home page
    await page.setViewport({width: 885, height: 813});
    await page.goto('http://localhost:8080/');
    await page.screenshot({path: `${screenshotDir}/home.png`});

    // Helper to click menu items and capture screenshot
    const clickAndCapture = async (locatorArray, name) => {
        const promises = [];
        const startWaitingForEvents = () => promises.push(page.waitForNavigation());
        await puppeteer.Locator.race(locatorArray)
            .setTimeout(timeout)
            .on('action', () => startWaitingForEvents())
            .click({offset: {x: 13, y: 4}});
        await Promise.all(promises);
        await page.screenshot({path: `${screenshotDir}/${name}.png`});
    };

    // Home (already captured)

    // Click "Team" menu
    await clickAndCapture([
        page.locator('::-p-aria(Team[role=\"menuitem\"])'),
        page.locator('header li:nth-of-type(2) > a'),
        page.locator('::-p-xpath(/html/body/header/div/nav/ul/li[2]/a)'),
        page.locator(':scope >>> header li:nth-of-type(2) > a')
    ], 'team');

    // Click "Publications" menu
    await clickAndCapture([
        page.locator('::-p-aria(Publications[role=\"menuitem\"])'),
        page.locator('header li:nth-of-type(3) > a'),
        page.locator('::-p-xpath(/html/body/header/div/nav/ul/li[3]/a)'),
        page.locator(':scope >>> header li:nth-of-type(3) > a')
    ], 'publications');

    // Click "Research" menu
    await clickAndCapture([
        page.locator('::-p-aria(Research)'),
        page.locator('li:nth-of-type(4) > a'),
        page.locator('::-p-xpath(//*[@id=\"error-page\"]/header/div/nav/ul/li[4]/a)'),
        page.locator(':scope >>> li:nth-of-type(4) > a')
    ], 'research');

    // Click "Contact" menu
    await clickAndCapture([
        page.locator('::-p-aria(Contact)'),
        page.locator('li:nth-of-type(5) > a'),
        page.locator('::-p-xpath(/html/body/header/div/nav/ul/li[5]/a)'),
        page.locator(':scope >>> li:nth-of-type(5) > a'),
        page.locator('::-p-text(Contact)')
    ], 'contact');

    await browser.close();
})();
